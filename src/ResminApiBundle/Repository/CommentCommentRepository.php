<?php

namespace ResminApiBundle\Repository;


use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityRepository;

class CommentCommentRepository extends EntityRepository
{

    public function findCommentsByStoryId($storyId)
    {
        $query = $this->createQueryBuilder('comment')
            ->select(
                'PARTIAL comment.{id, body, as_html, posted_at}',
                'PARTIAL owner.{id,username}'
            )
            ->join('comment.owner', 'owner')
            ->where('comment.story_id = :storyId and comment.status = 1')
            ->setParameter('storyId', $storyId)
            ->orderBy('comment.posted_at', 'ASC');

        return $query->getQuery()->getArrayResult();
    }
}