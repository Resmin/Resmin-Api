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
     * @Route("")
     * @Method("GET")
     * @ApiDoc(
     *  section="Question",
     *  description="Get all questions",
     *  filters={
     *      {"name"="limit", "dataType"="integer"},
     *      {"name"="page", "dataType"="integer", "default"="1"},
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


        $errors = $this->get('validator')->validate(
            $request->query->all(),
            new Assert\Collection(
                [
                    'limit' => new Assert\Optional([new Assert\Range(['min' => 1, 'max' => $this->getParameter('maximum_query_limit')])]),
                    'page' => new Assert\Optional([new Assert\Range(['min' => 1])]),
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
        $results = $service->getAllQuestions($page, $limit, $sort, $order);
        return [
            'meta' => $this->paginate($results['total'], $limit, $page),
            'data' => $results['data']
        ];
    }

}
