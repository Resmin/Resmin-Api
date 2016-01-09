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
    private $ownerId;

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
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_featured", type="boolean", nullable=false)
     */
    private $isFeatured;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_sponsored", type="boolean", nullable=false)
     */
    private $isSponsored;

    /**
     * @var integer
     *
     * @ORM\Column(name="answer_count", type="integer", nullable=false)
     */
    private $answerCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="follower_count", type="integer", nullable=false)
     */
    private $followerCount;

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
    private $coverAnswerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="latest_answer_id", type="integer", nullable=true)
     */
    private $latestAnswerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="redirected_to_id", type="integer", nullable=true)
     */
    private $redirectedToId;



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
     * @return QuestionQuestionmeta
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
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return QuestionQuestionmeta
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
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
     * Set isSponsored
     *
     * @param boolean $isSponsored
     *
     * @return QuestionQuestionmeta
     */
    public function setIsSponsored($isSponsored)
    {
        $this->isSponsored = $isSponsored;

        return $this;
    }

    /**
     * Get isSponsored
     *
     * @return boolean
     */
    public function getIsSponsored()
    {
        return $this->isSponsored;
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
        $this->answerCount = $answerCount;

        return $this;
    }

    /**
     * Get answerCount
     *
     * @return integer
     */
    public function getAnswerCount()
    {
        return $this->answerCount;
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
        $this->followerCount = $followerCount;

        return $this;
    }

    /**
     * Get followerCount
     *
     * @return integer
     */
    public function getFollowerCount()
    {
        return $this->followerCount;
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
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
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
        $this->coverAnswerId = $coverAnswerId;

        return $this;
    }

    /**
     * Get coverAnswerId
     *
     * @return integer
     */
    public function getCoverAnswerId()
    {
        return $this->coverAnswerId;
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
        $this->latestAnswerId = $latestAnswerId;

        return $this;
    }

    /**
     * Get latestAnswerId
     *
     * @return integer
     */
    public function getLatestAnswerId()
    {
        return $this->latestAnswerId;
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
        $this->redirectedToId = $redirectedToId;

        return $this;
    }

    /**
     * Get redirectedToId
     *
     * @return integer
     */
    public function getRedirectedToId()
    {
        return $this->redirectedToId;
    }
}
