<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoryStoryVisibleForUsers
 *
 * @ORM\Table(name="story_story_visible_for_users", uniqueConstraints={@ORM\UniqueConstraint(name="story_id", columns={"story_id", "user_id"})}, indexes={@ORM\Index(name="story_story_visible_for_users_734ee247", columns={"story_id"}), @ORM\Index(name="story_story_visible_for_users_6340c63c", columns={"user_id"})})
 * @ORM\Entity
 */
class StoryStoryVisibleForUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="story_id", type="integer", nullable=false)
     */
    private $storyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set storyId
     *
     * @param integer $storyId
     *
     * @return StoryStoryVisibleForUsers
     */
    public function setStoryId($storyId)
    {
        $this->storyId = $storyId;

        return $this;
    }

    /**
     * Get storyId
     *
     * @return integer
     */
    public function getStoryId()
    {
        return $this->storyId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return StoryStoryVisibleForUsers
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
