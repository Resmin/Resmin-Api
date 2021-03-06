<?php

namespace ResminApiBundle\Controller;


use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class QuestionController
 * @package ResminApiBundle\Controller
 * @Route("/question")
 */
class QuestionController extends BaseController
{
    /**
     * Returns all questions with pagination. (BTW it returns questionmeta records)
     *
     * @Route("")
     * @Method("GET")
     * @ApiDoc(
     *  section="Question",
     *  description="Get all questions",
     *  filters={
     *      {"name"="limit", "dataType"="integer"},
     *      {"name"="page", "dataType"="integer", "default"="1"},
     *      {"name"="min_answer_count", "dataType"="integer","description"="If you set this param, only questions will shown have anster greater and eq than min_answer_count variable"},
     *      {"name"="sort", "dataType"="string", "default"="id", "pattern"="(id)"},
     *      {"name"="order", "dataType"="string", "default"="DESC", "pattern"="(ASC|DESC)"},
     *  }
     * )
     */
    public function getAllQuestionsAction(Request $request)
    {
        $page = $request->query->getInt('page', 1);
        $limit = $request->query->getInt('limit', $this->getParameter('default_query_limit'));
        $sort = $request->query->get('sort', 'id');
        $order = $request->query->get('order', 'DESC');
        $min_answer_count = $request->query->get('min_answer_count');


        $errors = $this->get('validator')->validate(
            $request->query->all(),
            new Assert\Collection(
                [
                    'limit' => new Assert\Optional([new Assert\Range(['min' => 1, 'max' => $this->getParameter('maximum_query_limit')])]),
                    'page' => new Assert\Optional([new Assert\Range(['min' => 1])]),
                    'min_answer_count' => new Assert\Optional([new Assert\Range(['min' => 0])]),
                    'sort' => new Assert\Optional([new Assert\Choice(['choices' => ['id']])]),
                    'order' => new Assert\Optional([new Assert\Choice(['choices' => ['ASC', 'DESC']])]),
                ]
            )
        );

        if (count($errors)) {
            return $this->get('osm_easy_rest.utility.exception_wrapper')
                ->setErrorsFromConstraintViolations($errors)
                ->setMessage($this->get('translator')->trans('error.input_error'))
                ->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY)
                ->getResponse();
        }

        $loggedUser = $this->getUser();
        if ($loggedUser === null) {

        }


        $service = $this->get('resmin_api.service.question.question_service');
        $results = $service->getAllQuestions($page, $limit, $sort, $order, $min_answer_count);
        return [
            'meta' => $this->paginate($results['total'], $limit, $page),
            'data' => $results['data']
        ];
    }


    /**
     * Returns single question record.
     *
     * @Route("/{id}", requirements={"id"="\d+"})
     * @Method("GET")
     * @ApiDoc(
     *  section="Question",
     *  description="Get single question",
     *  requirements={
     *      {"name"="id", "dataType"="integer", "requirement"="\d+"}
     *  },
     * )
     */
    public function getSingleQuestionAction(Request $request, $id)
    {
        $service = $this->get('resmin_api.service.question.question_service');
        $result = $service->getSingleQuestion($id);

        if (!$result) {
            throw $this->createNotFoundException();
        }

        return [
            'data' => $result
        ];
    }

    /**
     * Returns stories that related with question.
     * Then select a story and show slots <3
     *
     * @Route("/{id}/stories", requirements={"id"="\d+"})
     * @Method("GET")
     * @ApiDoc(
     *  section="Question",
     *  description="Get question stories",
     *  requirements={
     *      {"name"="id", "dataType"="integer", "requirement"="\d+"}
     *  },
     * )
     */
    public function getQuestionStoriesAction(Request $request, $id)
    {
        //TODO: check id exist.

        $service = $this->get('resmin_api.service.story.story_service');
        $result = $service->getAllStories(1, 1000, 'all', $id);

        return [
            'data' => $result['data']
        ];
    }

}
