<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FollowUserfollow
 *
 * @ORM\Table(name="follow_userfollow", indexes={@ORM\Index(name="follower_id_refs_id_48712f1f", columns={"follower_id"}), @ORM\Index(name="target_id_refs_id_48712f1f", columns={"target_id"})})
 * @ORM\Entity
 */
class FollowUserfollow
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
     * @return FollowUserfollow
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
     * @return FollowUserfollow
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
     * @return FollowUserfollow
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
}
