<?php

namespace ResminApiBundle\Repository;


use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityRepository;

class StorySlotRepository extends EntityRepository
{

    public function findSlotsByStoryId($storyId)
    {
        $query = $this->createQueryBuilder('slot')
            ->select(
                'slot.title', 'slot.description',
                'image.image', 'image.is_playble'
            )
            ->join('slot.image', 'image')
            ->where('slot.story_id = :storyId')
            ->setParameter('storyId', $storyId)
            ->orderBy('slot.order', 'ASC');

        return $query->getQuery()->getArrayResult();
    }
}