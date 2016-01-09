<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentComment
 *
 * @ORM\Table(name="comment_comment", indexes={@ORM\Index(name="comment_comment_734ee247", columns={"story_id"}), @ORM\Index(name="comment_comment_cb902d83", columns={"owner_id"})})
 * @ORM\Entity
 */
class CommentComment
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
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var string
     *
     * @ORM\Column(name="as_html", type="text", nullable=false)
     */
    private $asHtml;

    /**
     * @var integer
     *
     * @ORM\Column(name="owner_id", type="integer", nullable=false)
     */
    private $ownerId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="posted_at", type="datetime", nullable=false)
     */
    private $postedAt;

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
     * Set storyId
     *
     * @param integer $storyId
     *
     * @return CommentComment
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
     * Set body
     *
     * @param string $body
     *
     * @return CommentComment
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set asHtml
     *
     * @param string $asHtml
     *
     * @return CommentComment
     */
    public function setAsHtml($asHtml)
    {
        $this->asHtml = $asHtml;

        return $this;
    }

    /**
     * Get asHtml
     *
     * @return string
     */
    public function getAsHtml()
    {
        return $this->asHtml;
    }

    /**
     * Set ownerId
     *
     * @param integer $ownerId
     *
     * @return CommentComment
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Set postedAt
     *
     * @param \DateTime $postedAt
     *
     * @return CommentComment
     */
    public function setPostedAt($postedAt)
    {
        $this->postedAt = $postedAt;

        return $this;
    }

    /**
     * Get postedAt
     *
     * @return \DateTime
     */
    public function getPostedAt()
    {
        return $this->postedAt;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return CommentComment
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
