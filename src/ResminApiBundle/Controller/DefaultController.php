<?php

namespace ResminApiBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends BaseController
{
    /**
     * @Method("GET")
     * @Route("/")
     */
    public function indexAction()
    {

        return ['test'];
    }
}
