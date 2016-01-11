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
 * Class TestController
 * @package ResminApiBundle\Controller
 * @Route("/test")
 */
class TestController extends BaseController
{
    /**
     * @Route("/access-token")
     * @Method({"GET"})
     * @Security("has_role('ROLE_USER')")
     * @ApiDoc(
     *  section="Test",
     *  description="Test access token is valid"
     * )
     */
    public function checkAccessTokenAction(Request $request)
    {
        return [
            'data' => [
                'message' => 'If you are seeing this message, you authenticated succesfully.'
            ]
        ];
    }
}
