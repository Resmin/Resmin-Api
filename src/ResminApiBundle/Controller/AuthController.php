<?php

namespace ResminApiBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
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
     * If login successfull, returns access_token that you will use it for authentication on api.
     *
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
        /**
         * TODO: update user's last login time.
         */

        return [
            'data' => [
                'access_token' => $accessToken,
                'username' => $user->getUsername()
            ]
        ];
    }


    /**
     * Returns user belongs to access token
     *
     * @Route("/me")
     * @Method({"GET"})
     * @Security("has_role('ROLE_USER')")
     * @ApiDoc(
     *  section="Auth",
     *  description="Get logged user details"
     * )
     */
    public function getLoggedUserDetailsAction(Request $request)
    {
        $user = $this->getUser();

        return [
            'data' => [
                'username' => $user->getUsername(),
                'email' => $user->getEmail(),
                'first_name' => $user->getFirstName(),
                'last_name' => $user->getLastName,
                'last_login' => $user->getLastLogin()
            ]
        ];
    }


}
