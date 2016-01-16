<?php
/**
 * Date: 1/17/16
 * Time: 1:30 AM
 * @author Guven Atbakan <guven@atbakan.com>
 */

namespace ResminApiBundle\Tests\Api;


class DocumentationTest extends BaseTestCase
{
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