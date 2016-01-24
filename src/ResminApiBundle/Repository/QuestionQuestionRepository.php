<?php

namespace ResminApiBundle\Repository;

use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class QuestionQuestionRepository extends EntityRepository
{

    /**
     * @param integer $offset
     * @param integer $limit
     * @param string $sort
     * @param string $order
     * @param $min_answer_count
     * @return array
     */
    public function findAllQuestions($offset, $limit, $sort, $order, $min_answer_count)
    {
        if ($sort === 'id') {
            $sort = 'question_meta.id';
        } else {
            $sort = 'question_meta.id';
        }

        $query = $this->getEntityManager()->createQueryBuilder()
            ->from('ResminApiBundle:QuestionQuestionmeta', 'question_meta')
            ->select(
                'PARTIAL question_meta.{id,text,created_at,answer_count,follower_count}'
            )->join('question_meta.owner', 'owner')
            ->where('question_meta.status = :status')
            ->setParameter('status', 0);

        if ($min_answer_count !== null) {
            $query->andWhere('question_meta.answer_count >= :min_answer_count')
                ->setParameter('min_answer_count', $min_answer_count);
        }

        $query->setMaxResults($limit)
            ->setFirstResult($offset)
            ->orderBy($sort, $order);
        $paginator = new Paginator($query, true);

        return [
            'total' => count($paginator),
            'data' => $paginator->getQuery()->getArrayResult()
        ];
    }

    public function findSingleQuestion($id)
    {
        $query = $this->getEntityManager()->createQueryBuilder()
            ->from('ResminApiBundle:QuestionQuestionmeta', 'question_meta')
            ->select(
                'PARTIAL question_meta.{id,text,created_at,answer_count,follower_count}'
            )
            ->andWhere('question_meta.status = :status AND question_meta.id = :id')
            ->setParameter('status', 0)
            ->setParameter('id', $id);

        return $query->getQuery()->getOneOrNullResult(AbstractQuery::HYDRATE_ARRAY);
    }
}