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
use ResminApiBundle\Repository\CommentCommentRepository;
use ResminApiBundle\Repository\StorySlotRepository;
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
     * @var CommentCommentRepository
     */
    private $commentCommentRepository;
    /**
     * @var StorySlotRepository
     */
    private $storySlotRepository;

    /**
     * StoryStoryService constructor.
     * @param EntityRepository $storyStoryRepository
     * @param EntityManager $entityManager
     * @param EntityRepository $commentCommentRepository
     * @param EntityRepository $storySlotRepository
     */
    public function __construct(EntityRepository $storyStoryRepository, EntityManager $entityManager, EntityRepository $commentCommentRepository, EntityRepository $storySlotRepository)
    {
        $this->storyStoryRepository = $storyStoryRepository;
        $this->entityManager = $entityManager;
        $this->commentCommentRepository = $commentCommentRepository;
        $this->storySlotRepository = $storySlotRepository;
    }

    public function getAllStories($page, $limit, $listing_type, $question_meta_id)
    {
        if ($listing_type === 'public') {
            $visible_for = 0;
        } else if ($listing_type === 'all') {
            $visible_for = NULL; //We will show all records // TODO: not all, public + logged user listings
        } else if ($listing_type === 'wall') {
            $visible_for = 1; //check user
        }

        $offset = ($page * $limit) - $limit;
        $results = $this->storyStoryRepository->findAllStories($offset, $limit, $visible_for, $question_meta_id);

        foreach ($results['data'] as $k => $result) {
            $results['data'][$k]['cover_img'] = json_decode($result['cover_img']);
            $results['data'][$k]['comment_count'] = (int)($result['comment_count']);
        }

        return $results;
    }

    public function getSingleStory($id)
    {
        $result = $this->storyStoryRepository->findStoryById($id);
        if (!$result) {
            return null;
        }

        $result['cover_img'] = json_decode($result['cover_img']);
        $result['comment_count'] = (int)($result['comment_count']);

        return $result;
    }
}