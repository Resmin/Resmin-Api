<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoryStory
 *
 * @ORM\Table(name="story_story", indexes={@ORM\Index(name="story_story_cb902d83", columns={"owner_id"}), @ORM\Index(name="story_story_25110688", columns={"question_id"}), @ORM\Index(name="story_story_question_meta_id", columns={"question_meta_id"})})
 * @ORM\Entity(repositoryClass="ResminApiBundle\Repository\StoryStoryRepository")
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
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $created_at;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_id", type="integer", nullable=true)
     */
    private $question_id;


    /**
     * @var \AuthUser
     *
     * @ORM\ManyToOne(targetEntity="QuestionQuestion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     * })
     */
    private $question;

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
    private $is_nsfw;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_anonymouse", type="boolean", nullable=false)
     */
    private $is_anonymouse;

    /**
     * @var integer
     *
     * @ORM\Column(name="like_count", type="integer", nullable=false)
     */
    private $like_count;

    /**
     * @var integer
     *
     * @ORM\Column(name="slot_count", type="integer", nullable=true)
     */
    private $slot_count;

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
    private $visible_for;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_featured", type="boolean", nullable=false)
     */
    private $is_featured;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_count", type="integer", nullable=true)
     */
    private $comment_count;

    /**
     * @var string
     *
     * @ORM\Column(name="cover_img", type="text", nullable=true)
     */
    private $cover_img;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_playble", type="boolean", nullable=false)
     */
    private $is_playble;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_meta_id", type="integer", nullable=false)
     */
    private $question_meta_id;


    /**
     * @var \AuthUser
     *
     * @ORM\ManyToOne(targetEntity="QuestionQuestionmeta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="question_meta_id", referencedColumnName="id")
     * })
     */
    private $question_meta;



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
     * @return StoryStory
     */
    public function setOwnerId($ownerId)
    {
        $this->owner_id = $ownerId;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
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
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get questionId
     *
     * @return integer
     */
    public function getQuestionId()
    {
        return $this->question_id;
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
        $this->question_id = $questionId;

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
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * Get isNsfw
     *
     * @return boolean
     */
    public function getIsNsfw()
    {
        return $this->is_nsfw;
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
        $this->is_nsfw = $isNsfw;

        return $this;
    }

    /**
     * Get isAnonymouse
     *
     * @return boolean
     */
    public function getIsAnonymouse()
    {
        return $this->is_anonymouse;
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
        $this->is_anonymouse = $isAnonymouse;

        return $this;
    }

    /**
     * Get likeCount
     *
     * @return integer
     */
    public function getLikeCount()
    {
        return $this->like_count;
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
        $this->like_count = $likeCount;

        return $this;
    }

    /**
     * Get slotCount
     *
     * @return integer
     */
    public function getSlotCount()
    {
        return $this->slot_count;
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
        $this->slot_count = $slotCount;

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
     * @return StoryStory
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get visibleFor
     *
     * @return integer
     */
    public function getVisibleFor()
    {
        return $this->visible_for;
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
        $this->visible_for = $visibleFor;

        return $this;
    }

    /**
     * Get isFeatured
     *
     * @return boolean
     */
    public function getIsFeatured()
    {
        return $this->is_featured;
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
        $this->is_featured = $isFeatured;

        return $this;
    }

    /**
     * Get commentCount
     *
     * @return integer
     */
    public function getCommentCount()
    {
        return $this->comment_count;
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
        $this->comment_count = $commentCount;

        return $this;
    }

    /**
     * Get coverImg
     *
     * @return string
     */
    public function getCoverImg()
    {
        return $this->cover_img;
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
        $this->cover_img = $coverImg;

        return $this;
    }

    /**
     * Get isPlayble
     *
     * @return boolean
     */
    public function getIsPlayble()
    {
        return $this->is_playble;
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
        $this->is_playble = $isPlayble;

        return $this;
    }

    /**
     * Get questionMetaId
     *
     * @return integer
     */
    public function getQuestionMetaId()
    {
        return $this->question_meta_id;
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
        $this->question_meta_id = $questionMetaId;

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
     * @return StoryStory
     */
    public function setOwner(\ResminApiBundle\Entity\AuthUser $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get question
     *
     * @return \ResminApiBundle\Entity\QuestionQuestion
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set question
     *
     * @param \ResminApiBundle\Entity\QuestionQuestion $question
     *
     * @return StoryStory
     */
    public function setQuestion(\ResminApiBundle\Entity\QuestionQuestion $question = null)
    {
        $this->question = $question;

        return $this;
    }
}
