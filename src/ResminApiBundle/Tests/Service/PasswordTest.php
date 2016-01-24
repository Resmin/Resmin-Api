<?php

namespace ResminApiBundle\Tests\Service;

use ResminApiBundle\Tests\Api\BaseTestCase;

class PaswordTest extends BaseTestCase
{
    public function testInsertTags()
    {
        $password = 'pAs$W0rD';
        $service = $this->container->get('resmin_api.service.auth_service');

        $hashedPassword = $service->makePassword($password);
        $this->assertTrue($service->verifyPassword($hashedPassword, $password));

        $password = 'pAsSW0rD';
        $this->assertFalse($service->verifyPassword($hashedPassword, $password));

        $this->assertFalse($service->verifyPassword('WRONG-HASH', $password));
    }
}