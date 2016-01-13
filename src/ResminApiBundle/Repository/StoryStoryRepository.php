<?php
/**
 * Created by PhpStorm.
 * User: guven
 * Date: 10.01.2016
 * Time: 00:52
 */

namespace ResminApiBundle\Repository;


use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class StoryStoryRepository extends EntityRepository
{

    /**
     * @param integer $offset
     * @param integer $limit
     * @param integer $visible_for
     * @param $question_meta_id
     * @return array
     */
    public function findAllStories($offset, $limit, $visible_for, $question_meta_id)
    {
        $query = $this->createQueryBuilder('story')
            ->select(
                'PARTIAL story.{id,created_at,description,is_nsfw,is_anonymouse,like_count,slot_count,status,visible_for,is_featured,comment_count,cover_img,is_playble}',
                'PARTIAL owner.{id,username}',
                'PARTIAL question_meta.{id,text}'
            )
            ->join('story.owner', 'owner')
            /*->leftJoin('story.question', 'question')*/
            ->leftJoin('story.question_meta', 'question_meta')
            ->where('story.status = :status')
            ->setParameter('status', 1)
            ->andWhere('story.is_nsfw = :is_nsfw')
            ->setParameter('is_nsfw', false);

        if ($visible_for !== NULL) {
            $query->andWhere('story.visible_for = :visible_for')
                ->setParameter('visible_for', $visible_for);
        }
        if ($question_meta_id !== NULL) {
            $query->andWhere('story.question_meta_id =:question_meta_id')
                ->setParameter('question_meta_id', $question_meta_id);
        }
        $query->setMaxResults($limit)
            ->setFirstResult($offset)
            ->orderBy('story.id', 'DESC');
        $paginator = new Paginator($query, true);

        return [
            'total' => count($paginator),
            'data' => $paginator->getQuery()->getArrayResult()
        ];
    }

    public function findStoryById($id)
    {
        $query = $this->createQueryBuilder('story')
            ->select(
                'PARTIAL story.{id,created_at,description,is_nsfw,is_anonymouse,like_count,slot_count,status,visible_for,is_featured,comment_count,cover_img,is_playble}',
                'PARTIAL owner.{id,username}',
                'PARTIAL question_meta.{id,text}'
            )
            ->join('story.owner', 'owner')
            ->leftJoin('story.question_meta', 'question_meta')
            ->andwhere('story.id = :id')
            ->setParameter('id', $id)
            ->andwhere('story.status = :status')
            ->setParameter('status', 1);

        return $query->getQuery()->getOneOrNullResult(AbstractQuery::HYDRATE_ARRAY);
    }
}