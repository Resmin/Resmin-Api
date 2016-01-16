<?php
namespace ResminApiBundle\Tests\Api;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class BaseTestCase extends WebTestCase
{
    /**
     * contains consumer key and access token.
     * @var array $headers
     */
    protected $headers;

    /**
     * @var UnitTestService $service
     */
    protected $service;

    protected $container;

    public function __construct($login = false)
    {
        $this->container = $this->getContainer();
        if ($login === false) {
            $this->headers = [];
        } else {
            $this->headers = $this->container->get('resmin_api.service.unittest_service')->getHeaders();
        }
    }

    public function test_free()
    {

    }
}