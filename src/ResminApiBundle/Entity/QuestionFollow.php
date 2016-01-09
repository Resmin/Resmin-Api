<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionFollow
 *
 * @ORM\Table(name="question_follow", indexes={@ORM\Index(name="question_follow_c5e64013", columns={"follower_id"}), @ORM\Index(name="question_follow_e84196a9", columns={"ct_id"})})
 * @ORM\Entity
 */
class QuestionFollow
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
     * @var integer
     *
     * @ORM\Column(name="ct_id", type="integer", nullable=false)
     */
    private $ctId;

    /**
     * @var integer
     *
     * @ORM\Column(name="oid", type="integer", nullable=false)
     */
    private $oid;



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
     * @return QuestionFollow
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
     * Set status
     *
     * @param integer $status
     *
     * @return QuestionFollow
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
     * @return QuestionFollow
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
     * @return QuestionFollow
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

    /**
     * Set ctId
     *
     * @param integer $ctId
     *
     * @return QuestionFollow
     */
    public function setCtId($ctId)
    {
        $this->ctId = $ctId;

        return $this;
    }

    /**
     * Get ctId
     *
     * @return integer
     */
    public function getCtId()
    {
        return $this->ctId;
    }

    /**
     * Set oid
     *
     * @param integer $oid
     *
     * @return QuestionFollow
     */
    public function setOid($oid)
    {
        $this->oid = $oid;

        return $this;
    }

    /**
     * Get oid
     *
     * @return integer
     */
    public function getOid()
    {
        return $this->oid;
    }
}
