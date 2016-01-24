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
                'PARTIAL slot.{id, title, description}',
                'PARTIAL image.{id,image,is_playble,mime_type}'
            )
            ->join('slot.image', 'image')
            ->where('slot.story_id = :storyId')
            ->setParameter('storyId', $storyId)
            ->orderBy('slot.order', 'ASC');

        return $query->getQuery()->getArrayResult();
    }
}