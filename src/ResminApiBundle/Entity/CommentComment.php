<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentComment
 *
 * @ORM\Table(name="comment_comment", indexes={@ORM\Index(name="comment_comment_734ee247", columns={"story_id"}), @ORM\Index(name="comment_comment_cb902d83", columns={"owner_id"})})
 * @ORM\Entity(repositoryClass="ResminApiBundle\Repository\CommentCommentRepository")
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
    private $story_id;


    /**
     * @var \StoryStory
     *
     * @ORM\ManyToOne(targetEntity="StoryStory", inversedBy="comments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="story_id", referencedColumnName="id")
     * })
     */
    private $story;

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
    private $as_html;

    /**
     * @var integer
     *
     * @ORM\Column(name="owner_id", type="integer", nullable=false)
     */
    private $owner_id;

    /**
     * @var \AuthUser
     *
     * @ORM\ManyToOne(targetEntity="AuthUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     * })
     */
    private $owner;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="posted_at", type="datetime", nullable=false)
     */
    private $posted_at;

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
     * Get storyId
     *
     * @return integer
     */
    public function getStoryId()
    {
        return $this->story_id;
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
        $this->story_id = $storyId;

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
     * Get asHtml
     *
     * @return string
     */
    public function getAsHtml()
    {
        return $this->as_html;
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
        $this->as_html = $asHtml;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->owner_id;
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
        $this->owner_id = $ownerId;

        return $this;
    }

    /**
     * Get postedAt
     *
     * @return \DateTime
     */
    public function getPostedAt()
    {
        return $this->posted_at;
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
        $this->posted_at = $postedAt;

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
     * Get story
     *
     * @return \ResminApiBundle\Entity\StoryStory
     */
    public function getStory()
    {
        return $this->story;
    }

    /**
     * Set story
     *
     * @param \ResminApiBundle\Entity\StoryStory $story
     *
     * @return CommentComment
     */
    public function setStory(\ResminApiBundle\Entity\StoryStory $story = null)
    {
        $this->story = $story;

        return $this;
    }

    /**
     * Get owner
     *
     * @return \ResminApiBundle\Entity\AuthUser
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set owner
     *
     * @param \ResminApiBundle\Entity\AuthUser $owner
     *
     * @return CommentComment
     */
    public function setOwner(\ResminApiBundle\Entity\AuthUser $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }
}
