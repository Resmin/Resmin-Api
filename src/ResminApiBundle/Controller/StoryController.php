<?php

namespace ResminApiBundle\Controller;


use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class StoryController
 * @package ResminApiBundle\Controller
 * @Route("/story")
 */
class StoryController extends BaseController
{
    /**
     * @Route("")
     * @Method("GET")
     * @ApiDoc(
     *  section="Story",
     *  description="Get all stories",
     *  filters={
     *      {"name"="limit", "dataType"="integer"},
     *      {"name"="page", "dataType"="integer", "default"="1"},
     *      {"name"="listing_type", "dataType"="string", "default"="public", "pattern"="(public|wall|all)", "description"="for now only public works"},
     *  }
     * )
     */
    public function getAllStoriesAction(Request $request)
    {
        $page = $request->query->getInt('page', 1);
        $limit = $request->query->getInt('limit', $this->getParameter('default_query_limit'));
        $listing_type = $request->query->get('listing_type', 'public');

        $errors = $this->get('validator')->validate(
            $request->query->all(),
            new Assert\Collection(
                [
                    'limit' => new Assert\Optional([new Assert\Range(['min' => 1, 'max' => $this->getParameter('maximum_query_limit')])]),
                    'page' => new Assert\Optional([new Assert\Range(['min' => 1])]),
                    'listing_type' => new Assert\Optional([new Assert\Choice(['choices' => ['public', 'wall', 'all']])]),
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
            if ($listing_type === 'all' or $listing_type === 'wall') {
                $listing_type = 'public';
            }
        }


        $service = $this->get('resmin_api.service.story.story_service');
        $results = $service->getAllStories($page, $limit, $listing_type);
        return [
            'meta' => $this->paginate($results['total'], $limit, $page),
            'data' => $results['data']
        ];
    }

    /**
     * @Route("/{id}", requirements={"id"="\d+"})
     * @Method("GET")
     * @ApiDoc(
     *  section="Story",
     *  description="Get single story",
     *  requirements={
     *      {"name"="id", "dataType"="integer", "requirement"="\d+"}
     *  },
     * )
     */
    public function getSingleStoryAction(Request $request, $id)
    {
        $service = $this->get('resmin_api.service.story.story_service');
        $result = $service->getSingleStory($id);

        if (!$result) {
            return $this->createNotFoundException();
        }

        return [
            'data' => $result
        ];
    }
}
