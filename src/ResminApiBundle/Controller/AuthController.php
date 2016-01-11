<?php

namespace ResminApiBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class AuthController
 * @package ResminApiBundle\Controller
 * @Route("/auth")
 */
class AuthController extends BaseController
{
    /**
     * @Route("/login")
     * @Method({"POST"})
     * @ApiDoc(
     *  section="Auth",
     *  description="Login as user and get access token",
     *  requirements={
     *      {"name"="username", "dataType"="string"},
     *      {"name"="password", "dataType"="string"},
     *  },
     * )
     */
    public function checkLoginAction(Request $request)
    {
        $username = $request->request->get('username');
        $password = $request->request->get('password');

        $errors = $this->get('validator')->validate(
            $request->request->all(),
            new Assert\Collection(
                [
                    'username' => [
                        new Assert\NotBlank()
                    ],
                    'password' => [
                        new Assert\NotBlank()
                    ]
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

        $service = $this->get('resmin_api.service.auth_service');

        $user = $service->checkUsernamePassword($username, $password);

        if (!$user) {
            throw $this->createNotFoundException();
        }

        $accessToken = md5(random_bytes(32));

        $accessTokenService = $this->get('resmin_api.service.access_token_service');
        $accessTokenService->insertAccessToken($accessToken, $user);

        return [
            'data' => [
                'access_token' => $accessToken,
                'username' => $user->getUsername()
            ]
        ];
    }
}
