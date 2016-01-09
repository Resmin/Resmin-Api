<?php

namespace ResminApiBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends BaseController
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

        return ['test'];
    }
}
