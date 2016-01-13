<?php
namespace ResminApiBundle\Tests\Api\Story;

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
        $this->assertArrayHasKey('description', $item);
        $this->assertArrayHasKey('is_nsfw', $item);
        $this->assertArrayHasKey('is_featured', $item);
        $this->assertArrayHasKey('like_count', $item);
        $this->assertArrayHasKey('slot_count', $item);
        $this->assertArrayHasKey('comment_count', $item);
        $this->assertArrayHasKey('cover_img', $item);
        $this->assertArrayHasKey('status', $item);
        $this->assertArrayHasKey('owner', $item);
        $this->assertArrayHasKey('id', $item['owner']);
        $this->assertArrayHasKey('username', $item['owner']);
        $this->assertArrayHasKey('question_meta', $item);
        $this->assertArrayHasKey('id', $item['question_meta']);
        $this->assertArrayHasKey('text', $item['question_meta']);
        $this->assertArrayHasKey('created_at', $item);
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


    public function testSingleStory()
    {
        //TODO: get storyId random
        $storyId = 11762;

        $client = static::createClient();
        $client->request('GET', '/v2/story/' . $storyId, [], [], $this->headers);

        $this->assertStatusCode(200, $client);

        $response = json_decode($client->getResponse()->getContent(), true);
        $this->assertTrue(is_array($response));

        $this->assertArrayHasKey('data', $response);
        $this->assertTrue(is_array($response['data']));

        $item = $response['data'];

        $this->assertArrayHasKey('id', $item);
        $this->assertArrayHasKey('description', $item);
        $this->assertArrayHasKey('is_nsfw', $item);
        $this->assertArrayHasKey('is_featured', $item);
        $this->assertArrayHasKey('like_count', $item);
        $this->assertArrayHasKey('slot_count', $item);
        $this->assertArrayHasKey('comment_count', $item);
        $this->assertArrayHasKey('cover_img', $item);
        $this->assertArrayHasKey('status', $item);
        $this->assertArrayHasKey('created_at', $item);
        $this->assertArrayHasKey('owner', $item);
        $this->assertArrayHasKey('id', $item['owner']);
        $this->assertArrayHasKey('username', $item['owner']);
        $this->assertArrayHasKey('question_meta', $item);
        $this->assertArrayHasKey('id', $item['question_meta']);
        $this->assertArrayHasKey('text', $item['question_meta']);
        $this->assertArrayHasKey('is_playble', $item);
        $this->assertArrayHasKey('slots', $item);
        if (count($item['slots']) > 0) {
            foreach ($item['slots'] as $slot) {
                $this->assertArrayHasKey('title', $slot);
                $this->assertArrayHasKey('description', $slot);
                $this->assertArrayHasKey('is_playble', $slot);
                $this->assertArrayHasKey('image', $slot);
            }
        }
        $this->assertArrayHasKey('comments', $item);
        if (count($item['comments']) > 0) {
            foreach ($item['comments'] as $comment) {
                $this->assertArrayHasKey('id', $comment);
                $this->assertArrayHasKey('body', $comment);
                $this->assertArrayHasKey('as_html', $comment);
                $this->assertArrayHasKey('posted_at', $comment);
                $this->assertArrayHasKey('owner', $comment);
                $this->assertArrayHasKey('id', $comment['owner']);
                $this->assertArrayHasKey('username', $comment['owner']);
            }
        }
    }
}