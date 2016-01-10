<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionQuestionmeta
 *
 * @ORM\Table(name="question_questionmeta", indexes={@ORM\Index(name="question_questionmeta_cb902d83", columns={"owner_id"}), @ORM\Index(name="question_questionmeta_55cd53a9", columns={"cover_answer_id"}), @ORM\Index(name="question_questionmeta_27f022e6", columns={"latest_answer_id"}), @ORM\Index(name="question_questionmeta_redirected_to_id", columns={"redirected_to_id"})})
 * @ORM\Entity
 */
class QuestionQuestionmeta
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
     * @ORM\Column(name="owner_id", type="integer", nullable=true)
     */
    private $owner_id;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=512, nullable=false)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $created_at;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updated_at;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_featured", type="boolean", nullable=false)
     */
    private $is_featured;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_sponsored", type="boolean", nullable=false)
     */
    private $is_sponsored;

    /**
     * @var integer
     *
     * @ORM\Column(name="answer_count", type="integer", nullable=false)
     */
    private $answer_count;

    /**
     * @var integer
     *
     * @ORM\Column(name="follower_count", type="integer", nullable=false)
     */
    private $follower_count;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="cover_answer_id", type="integer", nullable=true)
     */
    private $cover_answer_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="latest_answer_id", type="integer", nullable=true)
     */
    private $latest_answer_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="redirected_to_id", type="integer", nullable=true)
     */
    private $redirected_to_id;


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
     * @return QuestionQuestionmeta
     */
    public function setOwnerId($ownerId)
    {
        $this->owner_id = $ownerId;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return QuestionQuestionmeta
     */
    public function setText($text)
    {
        $this->text = $text;

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
     * @return QuestionQuestionmeta
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return QuestionQuestionmeta
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

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
     * @return QuestionQuestionmeta
     */
    public function setIsFeatured($isFeatured)
    {
        $this->is_featured = $isFeatured;

        return $this;
    }

    /**
     * Get isSponsored
     *
     * @return boolean
     */
    public function getIsSponsored()
    {
        return $this->is_sponsored;
    }

    /**
     * Set isSponsored
     *
     * @param boolean $isSponsored
     *
     * @return QuestionQuestionmeta
     */
    public function setIsSponsored($isSponsored)
    {
        $this->is_sponsored = $isSponsored;

        return $this;
    }

    /**
     * Get answerCount
     *
     * @return integer
     */
    public function getAnswerCount()
    {
        return $this->answer_count;
    }

    /**
     * Set answerCount
     *
     * @param integer $answerCount
     *
     * @return QuestionQuestionmeta
     */
    public function setAnswerCount($answerCount)
    {
        $this->answer_count = $answerCount;

        return $this;
    }

    /**
     * Get followerCount
     *
     * @return integer
     */
    public function getFollowerCount()
    {
        return $this->follower_count;
    }

    /**
     * Set followerCount
     *
     * @param integer $followerCount
     *
     * @return QuestionQuestionmeta
     */
    public function setFollowerCount($followerCount)
    {
        $this->follower_count = $followerCount;

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
     * @return QuestionQuestionmeta
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get coverAnswerId
     *
     * @return integer
     */
    public function getCoverAnswerId()
    {
        return $this->cover_answer_id;
    }

    /**
     * Set coverAnswerId
     *
     * @param integer $coverAnswerId
     *
     * @return QuestionQuestionmeta
     */
    public function setCoverAnswerId($coverAnswerId)
    {
        $this->cover_answer_id = $coverAnswerId;

        return $this;
    }

    /**
     * Get latestAnswerId
     *
     * @return integer
     */
    public function getLatestAnswerId()
    {
        return $this->latest_answer_id;
    }

    /**
     * Set latestAnswerId
     *
     * @param integer $latestAnswerId
     *
     * @return QuestionQuestionmeta
     */
    public function setLatestAnswerId($latestAnswerId)
    {
        $this->latest_answer_id = $latestAnswerId;

        return $this;
    }

    /**
     * Get redirectedToId
     *
     * @return integer
     */
    public function getRedirectedToId()
    {
        return $this->redirected_to_id;
    }

    /**
     * Set redirectedToId
     *
     * @param integer $redirectedToId
     *
     * @return QuestionQuestionmeta
     */
    public function setRedirectedToId($redirectedToId)
    {
        $this->redirected_to_id = $redirectedToId;

        return $this;
    }
}
