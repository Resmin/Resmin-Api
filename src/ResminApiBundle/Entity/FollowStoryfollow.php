<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FollowStoryfollow
 *
 * @ORM\Table(name="follow_storyfollow", indexes={@ORM\Index(name="follow_storyfollow_c5e64013", columns={"follower_id"}), @ORM\Index(name="follow_storyfollow_70bfdfd1", columns={"target_id"})})
 * @ORM\Entity
 */
class FollowStoryfollow
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
     * @ORM\Column(name="follower_id", type="integer", nullable=false)
     */
    private $followerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="target_id", type="integer", nullable=false)
     */
    private $targetId;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=255, nullable=false)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=16, nullable=false)
     */
    private $reason;



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
     * Set followerId
     *
     * @param integer $followerId
     *
     * @return FollowStoryfollow
     */
    public function setFollowerId($followerId)
    {
        $this->followerId = $followerId;

        return $this;
    }

    /**
     * Get followerId
     *
     * @return integer
     */
    public function getFollowerId()
    {
        return $this->followerId;
    }

    /**
     * Set targetId
     *
     * @param integer $targetId
     *
     * @return FollowStoryfollow
     */
    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;

        return $this;
    }

    /**
     * Get targetId
     *
     * @return integer
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return FollowStoryfollow
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return FollowStoryfollow
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return FollowStoryfollow
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
}
