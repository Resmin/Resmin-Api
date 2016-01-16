<?php
namespace ResminApiBundle\Tests\Api\Auth;

use ResminApiBundle\Tests\Api\BaseTestCase;

class AuthLoggedUserTest extends BaseTestCase
{
    public function __construct()
    {
        /**
         * Getting access token for this test
         */
        parent::__construct(true);
    }

    /**
     *
     */
    public function testLoggedUserDetails()
    {
        $client = static::createClient();

        $client->request('GET', '/v2/auth/me', [], [], $this->headers);

        $this->assertStatusCode(200, $client);

        $response = json_decode($client->getResponse()->getContent(), true);
        $this->assertTrue(is_array($response));

        $this->assertArrayHasKey('data', $response);
        $item = $response['data'];
        $this->assertArrayHasKey('username', $item);
        $this->assertArrayHasKey('email', $item);
        $this->assertArrayHasKey('first_name', $item);
        $this->assertArrayHasKey('last_name', $item);
        $this->assertArrayHasKey('last_login', $item);
    }

}