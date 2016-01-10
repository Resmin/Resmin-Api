<?php
namespace ResminApiBundle\Tests\Api;


use Dugun\ApiBundle\Service\UnitTestService;
use Dugun\ApiBundle\Service\UserService;
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

    public function __construct()
    {
        $this->container = $this->getContainer();
        $this->headers = [];
    }

    /**
     * This test checks every time for api documentation is working.
     */
    public function testDocumentationIsWorking()
    {
        $client = static::createClient();
        $client->request('GET', '/api/doc', [], [], []);

        $this->assertStatusCode(200, $client);
    }
}