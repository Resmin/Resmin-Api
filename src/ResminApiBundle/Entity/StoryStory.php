<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoryStory
 *
 * @ORM\Table(name="story_story", indexes={@ORM\Index(name="story_story_cb902d83", columns={"owner_id"}), @ORM\Index(name="story_story_25110688", columns={"question_id"}), @ORM\Index(name="story_story_question_meta_id", columns={"question_meta_id"})})
 * @ORM\Entity
 */
class StoryStory
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
     * @ORM\Column(name="owner_id", type="integer", nullable=false)
     */
    private $ownerId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_id", type="integer", nullable=true)
     */
    private $questionId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_nsfw", type="boolean", nullable=false)
     */
    private $isNsfw;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_anonymouse", type="boolean", nullable=false)
     */
    private $isAnonymouse;

    /**
     * @var integer
     *
     * @ORM\Column(name="like_count", type="integer", nullable=false)
     */
    private $likeCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="slot_count", type="integer", nullable=true)
     */
    private $slotCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="visible_for", type="smallint", nullable=false)
     */
    private $visibleFor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_featured", type="boolean", nullable=false)
     */
    private $isFeatured;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_count", type="integer", nullable=true)
     */
    private $commentCount;

    /**
     * @var string
     *
     * @ORM\Column(name="cover_img", type="text", nullable=true)
     */
    private $coverImg;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_playble", type="boolean", nullable=false)
     */
    private $isPlayble;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_meta_id", type="integer", nullable=false)
     */
    private $questionMetaId;



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
     * Set ownerId
     *
     * @param integer $ownerId
     *
     * @return StoryStory
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return StoryStory
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set questionId
     *
     * @param integer $questionId
     *
     * @return StoryStory
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * Get questionId
     *
     * @return integer
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return StoryStory
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return StoryStory
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set isNsfw
     *
     * @param boolean $isNsfw
     *
     * @return StoryStory
     */
    public function setIsNsfw($isNsfw)
    {
        $this->isNsfw = $isNsfw;

        return $this;
    }

    /**
     * Get isNsfw
     *
     * @return boolean
     */
    public function getIsNsfw()
    {
        return $this->isNsfw;
    }

    /**
     * Set isAnonymouse
     *
     * @param boolean $isAnonymouse
     *
     * @return StoryStory
     */
    public function setIsAnonymouse($isAnonymouse)
    {
        $this->isAnonymouse = $isAnonymouse;

        return $this;
    }

    /**
     * Get isAnonymouse
     *
     * @return boolean
     */
    public function getIsAnonymouse()
    {
        return $this->isAnonymouse;
    }

    /**
     * Set likeCount
     *
     * @param integer $likeCount
     *
     * @return StoryStory
     */
    public function setLikeCount($likeCount)
    {
        $this->likeCount = $likeCount;

        return $this;
    }

    /**
     * Get likeCount
     *
     * @return integer
     */
    public function getLikeCount()
    {
        return $this->likeCount;
    }

    /**
     * Set slotCount
     *
     * @param integer $slotCount
     *
     * @return StoryStory
     */
    public function setSlotCount($slotCount)
    {
        $this->slotCount = $slotCount;

        return $this;
    }

    /**
     * Get slotCount
     *
     * @return integer
     */
    public function getSlotCount()
    {
        return $this->slotCount;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return StoryStory
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
     * Set visibleFor
     *
     * @param integer $visibleFor
     *
     * @return StoryStory
     */
    public function setVisibleFor($visibleFor)
    {
        $this->visibleFor = $visibleFor;

        return $this;
    }

    /**
     * Get visibleFor
     *
     * @return integer
     */
    public function getVisibleFor()
    {
        return $this->visibleFor;
    }

    /**
     * Set isFeatured
     *
     * @param boolean $isFeatured
     *
     * @return StoryStory
     */
    public function setIsFeatured($isFeatured)
    {
        $this->isFeatured = $isFeatured;

        return $this;
    }

    /**
     * Get isFeatured
     *
     * @return boolean
     */
    public function getIsFeatured()
    {
        return $this->isFeatured;
    }

    /**
     * Set commentCount
     *
     * @param integer $commentCount
     *
     * @return StoryStory
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    /**
     * Get commentCount
     *
     * @return integer
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * Set coverImg
     *
     * @param string $coverImg
     *
     * @return StoryStory
     */
    public function setCoverImg($coverImg)
    {
        $this->coverImg = $coverImg;

        return $this;
    }

    /**
     * Get coverImg
     *
     * @return string
     */
    public function getCoverImg()
    {
        return $this->coverImg;
    }

    /**
     * Set isPlayble
     *
     * @param boolean $isPlayble
     *
     * @return StoryStory
     */
    public function setIsPlayble($isPlayble)
    {
        $this->isPlayble = $isPlayble;

        return $this;
    }

    /**
     * Get isPlayble
     *
     * @return boolean
     */
    public function getIsPlayble()
    {
        return $this->isPlayble;
    }

    /**
     * Set questionMetaId
     *
     * @param integer $questionMetaId
     *
     * @return StoryStory
     */
    public function setQuestionMetaId($questionMetaId)
    {
        $this->questionMetaId = $questionMetaId;

        return $this;
    }

    /**
     * Get questionMetaId
     *
     * @return integer
     */
    public function getQuestionMetaId()
    {
        return $this->questionMetaId;
    }
}
