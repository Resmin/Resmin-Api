<?php
namespace ResminApiBundle\Tests\Api\Article;

use ResminApiBundle\Tests\Api\BaseTestCase;

class StoryListingTest extends BaseTestCase
{
    public function testStoryListing()
    {
        $client = static::createClient();
        $client->request('GET', '/v2/story', [], [], $this->headers);

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
        $this->assertArrayHasKey('title', $item);
        $this->assertArrayHasKey('description', $item);
        $this->assertArrayHasKey('is_nsfw', $item);
        $this->assertArrayHasKey('is_featured', $item);
        $this->assertArrayHasKey('like_count', $item);
        $this->assertArrayHasKey('slot_count', $item);
        $this->assertArrayHasKey('comment_count', $item);
        $this->assertArrayHasKey('cover_img', $item);
        $this->assertArrayHasKey('status', $item);
        $this->assertArrayHasKey('owner_username', $item);
        $this->assertArrayHasKey('question_id', $item);
        $this->assertArrayHasKey('question_meta_id', $item);
        $this->assertArrayHasKey('question_meta_text', $item);
    }

    /**
     * This test only for check filters gives any error
     * It doesnt care about filters working properly, because we cannot check it.
     * Or we need to work hard for check results but i think this is enough for us.
     */
    public function testListingWithFilters()
    {
        $filters[] = ['limit' => 30, 'page' => 30];
        $filters[] = ['listing_type' => 'public'];
        foreach ($filters as $k => $v) {
            $client = static::createClient();
            $client->request('GET', '/v2/story', $v, [], $this->headers);
            $this->assertStatusCode(200, $client);

            $response = json_decode($client->getResponse()->getContent(), true);
            $this->assertTrue(is_array($response));
        }
    }

}