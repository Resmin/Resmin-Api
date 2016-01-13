<?php
namespace ResminApiBundle\Service;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use ResminApiBundle\Repository\QuestionQuestionRepository;

class QuestionQuestionService
{

    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var QuestionQuestionRepository
     */
    private $questionQuestionRepository;

    /**
     * QuestionQuestion constructor.
     * @param EntityRepository $questionQuestionRepository
     * @param EntityManager $entityManager
     */
    public function __construct(EntityRepository $questionQuestionRepository, EntityManager $entityManager)
    {

        $this->questionQuestionRepository = $questionQuestionRepository;
        $this->entityManager = $entityManager;
    }

    public function getAllQuestions($page, $limit, $sort, $order)
    {
        $offset = ($page * $limit) - $limit;
        $results = $this->questionQuestionRepository->findAllQuestions($offset, $limit, $sort, $order);

        return $results;
    }

    public function getSingleQuestion($id)
    {
        $result = $this->questionQuestionRepository->findSingleQuestion($id);

        return $result;
    }
}