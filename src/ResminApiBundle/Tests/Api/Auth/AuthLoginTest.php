<?php
namespace ResminApiBundle\Tests\Api\Auth;

use ResminApiBundle\Tests\Api\BaseTestCase;

class AuthLoginTest extends BaseTestCase
{
    /**
     * We need to use bitch user for running this test.
     * It must return 201 and it must has key data[username] and data[access_token]
     */
    public function testLogin()
    {
        $client = static::createClient();
        $parameters = [
            'username' => $this->container->getParameter('unittest_username'),
            'password' => $this->container->getParameter('unittest_password')
        ];
        $client->request('POST', '/v2/auth/login', $parameters, [], $this->headers);

        $this->assertStatusCode(201, $client);
        $response = json_decode($client->getResponse()->getContent(), true);
        $this->assertTrue(is_array($response));

        $this->assertArrayHasKey('data', $response);
        $item = $response['data'];
        $this->assertArrayHasKey('access_token', $item);
        $this->assertArrayHasKey('username', $item);
    }

}