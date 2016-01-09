<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionQuestion
 *
 * @ORM\Table(name="question_question", indexes={@ORM\Index(name="question_question_b7720888", columns={"questioner_id"}), @ORM\Index(name="question_question_a6b50b9d", columns={"meta_id"}), @ORM\Index(name="question_question_153a8eb8", columns={"questionee_id"}), @ORM\Index(name="question_question_5b4ce3ea", columns={"answer_id"})})
 * @ORM\Entity
 */
class QuestionQuestion
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
     * @ORM\Column(name="questioner_id", type="integer", nullable=true)
     */
    private $questionerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="meta_id", type="integer", nullable=false)
     */
    private $metaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="questionee_id", type="integer", nullable=false)
     */
    private $questioneeId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_anonymouse", type="boolean", nullable=false)
     */
    private $isAnonymouse;

    /**
     * @var integer
     *
     * @ORM\Column(name="answer_id", type="integer", nullable=true)
     */
    private $answerId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

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
     * Set questionerId
     *
     * @param integer $questionerId
     *
     * @return QuestionQuestion
     */
    public function setQuestionerId($questionerId)
    {
        $this->questionerId = $questionerId;

        return $this;
    }

    /**
     * Get questionerId
     *
     * @return integer
     */
    public function getQuestionerId()
    {
        return $this->questionerId;
    }

    /**
     * Set metaId
     *
     * @param integer $metaId
     *
     * @return QuestionQuestion
     */
    public function setMetaId($metaId)
    {
        $this->metaId = $metaId;

        return $this;
    }

    /**
     * Get metaId
     *
     * @return integer
     */
    public function getMetaId()
    {
        return $this->metaId;
    }

    /**
     * Set questioneeId
     *
     * @param integer $questioneeId
     *
     * @return QuestionQuestion
     */
    public function setQuestioneeId($questioneeId)
    {
        $this->questioneeId = $questioneeId;

        return $this;
    }

    /**
     * Get questioneeId
     *
     * @return integer
     */
    public function getQuestioneeId()
    {
        return $this->questioneeId;
    }

    /**
     * Set isAnonymouse
     *
     * @param boolean $isAnonymouse
     *
     * @return QuestionQuestion
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
     * Set answerId
     *
     * @param integer $answerId
     *
     * @return QuestionQuestion
     */
    public function setAnswerId($answerId)
    {
        $this->answerId = $answerId;

        return $this;
    }

    /**
     * Get answerId
     *
     * @return integer
     */
    public function getAnswerId()
    {
        return $this->answerId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return QuestionQuestion
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
     * Set status
     *
     * @param integer $status
     *
     * @return QuestionQuestion
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
