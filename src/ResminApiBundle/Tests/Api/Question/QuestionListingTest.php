<?php
namespace ResminApiBundle\Tests\Api\Question;

use ResminApiBundle\Tests\Api\BaseTestCase;

class QuestionListingTest extends BaseTestCase
{
    public function testQuestionListing()
    {
        $client = static::createClient();
        $client->request('GET', '/v2/question', [], [], $this->headers);

        $this->assertStatusCode(200, $client);

        $response = json_decode($client->getResponse()->getContent(), true);
        $this->assertTrue(is_array($response));

        $this->assertArrayHasKey('meta', $response);
        $this->assertArrayHasKey('total', $response['meta']);
        $this->assertArrayHasKey('per_page', $response['meta']);
        $this->assertArrayHasKey('data', $response);
        $this->assertGreaterThan(0, count($response['data']));
        if ($response['meta']['total'] >= $response['meta']['per_page']) {
            $this->assertCount($response['meta']['per_page'], $response['data']);
        } else {
            $this->assertCount($response['meta']['total'], $response['data']);
        }

        $item = $response['data'][0];

        $this->assertArrayHasKey('id', $item);
        $this->assertArrayHasKey('text', $item);
        $this->assertArrayHasKey('created_at', $item);
        $this->assertArrayHasKey('answer_count', $item);
        $this->assertArrayHasKey('follower_count', $item);

    }

}