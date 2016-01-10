<?php
/**
 * Created by PhpStorm.
 * User: guven
 * Date: 10.01.2016
 * Time: 00:52
 */

namespace ResminApiBundle\Repository;


use Doctrine\ORM\EntityRepository;

class StoryStoryRepository extends EntityRepository
{

    /**
     * @param integer $offset
     * @param integer $limit
     * @param integer $visible_for
     * @return array
     */
    public function findAllStories($offset, $limit, $visible_for)
    {

        $total = $this->countResultsQuery($visible_for);

        $query = $this->baseQuery($visible_for);

        $query->setMaxResults($limit)
            ->setFirstResult($offset);
        $query->orderBy('story.id', 'DESC');

        $data = $query->getQuery()->getArrayResult();

        return [
            'total' => (int)$total,
            'data' => $data
        ];
    }

    /**
     * @param integer $visible_for
     * @return integer
     */
    public function countResultsQuery($visible_for)
    {
        $query = $this->baseQuery($visible_for);
        $query->select('count(story.id)');

        return $query->getQuery()->getSingleScalarResult();
    }

    /**
     * @param integer $visible_for
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function baseQuery($visible_for)
    {
        $query = $this->createQueryBuilder('story')
            ->select(
                'story.id', 'story.title', 'story.description', 'story.is_nsfw', 'story.is_featured', 'story.like_count', 'story.slot_count',
                'story.comment_count', 'story.cover_img', 'story.status',
                /*'story.owner_id',*/
                'owner.username as owner_username',
                'story.question_id', 'story.question_meta_id', 'question_meta.text as question_meta_text'
            )->join('story.owner', 'owner')
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

        return $query;
    }
}