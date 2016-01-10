<?php
/**
 * Created by PhpStorm.
 * User: guven
 * Date: 10.01.2016
 * Time: 00:53
 */

namespace ResminApiBundle\Service;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use ResminApiBundle\Repository\StoryStoryRepository;

class StoryStoryService
{

    /**
     * @var StoryStoryRepository
     */
    private $storyStoryRepository;
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * StoryStoryService constructor.
     * @param EntityRepository $storyStoryRepository
     * @param EntityManager $entityManager
     */
    public function __construct(EntityRepository $storyStoryRepository, EntityManager $entityManager)
    {
        $this->storyStoryRepository = $storyStoryRepository;
        $this->entityManager = $entityManager;
    }

    public function getAllStories($page, $limit, $listing_type)
    {
        if ($listing_type === 'public') {
            $visible_for = 0;
        } else if ($listing_type === 'all') {
            $visible_for = NULL; //We will show all records // TODO: not all, public + logged user listings
        } else if ($listing_type === 'wall') {
            $visible_for = 1; //check user
        }

        $offset = ($page * $limit) - $limit;
        $results = $this->storyStoryRepository->findAllStories($offset, $limit, $visible_for);

        foreach ($results['data'] as $k => $result) {
            $results['data'][$k]['cover_img'] = json_decode($result['cover_img']);
        }

        return $results;
    }
}