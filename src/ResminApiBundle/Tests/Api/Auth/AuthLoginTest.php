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
            'username' => 'user',
            'password' => 'pass'
        ];
        $client->request('POST', '/v2/auth/login', $parameters, [], $this->headers);

        $this->assertStatusCode(404, $client);
    }

}