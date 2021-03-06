<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionQuestion
 *
 * @ORM\Table(name="question_question", indexes={@ORM\Index(name="question_question_b7720888", columns={"questioner_id"}), @ORM\Index(name="question_question_a6b50b9d", columns={"meta_id"}), @ORM\Index(name="question_question_153a8eb8", columns={"questionee_id"}), @ORM\Index(name="question_question_5b4ce3ea", columns={"answer_id"})})
 * @ORM\Entity(repositoryClass="ResminApiBundle\Repository\QuestionQuestionRepository")
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
    private $questioner_id;


    /**
     * @var \AuthUser
     *
     * @ORM\ManyToOne(targetEntity="AuthUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="questioner_id", referencedColumnName="id")
     * })
     */
    private $questioner;

    /**
     * @var integer
     *
     * @ORM\Column(name="meta_id", type="integer", nullable=false)
     */
    private $meta_id;


    /**
     * @var \QuestionMeta
     *
     * @ORM\ManyToOne(targetEntity="QuestionQuestionmeta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="meta_id", referencedColumnName="id")
     * })
     */
    private $question_meta;

    /**
     * @var integer
     *
     * @ORM\Column(name="questionee_id", type="integer", nullable=false)
     */
    private $questionee_id;


    /**
     * @var \AuthUser
     *
     * @ORM\ManyToOne(targetEntity="AuthUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="questionee_id", referencedColumnName="id")
     * })
     */
    private $questionee;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_anonymouse", type="boolean", nullable=false)
     */
    private $is_anonymouse;

    /**
     * @var integer
     *
     * @ORM\Column(name="answer_id", type="integer", nullable=true)
     */
    private $answer_id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $created_at;

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
     * Get questionerId
     *
     * @return integer
     */
    public function getQuestionerId()
    {
        return $this->questioner_id;
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
        $this->questioner_id = $questionerId;

        return $this;
    }

    /**
     * Get metaId
     *
     * @return integer
     */
    public function getMetaId()
    {
        return $this->meta_id;
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
        $this->meta_id = $metaId;

        return $this;
    }

    /**
     * Get questioneeId
     *
     * @return integer
     */
    public function getQuestioneeId()
    {
        return $this->questionee_id;
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
        $this->questionee_id = $questioneeId;

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
     * @return QuestionQuestion
     */
    public function setIsAnonymouse($isAnonymouse)
    {
        $this->is_anonymouse = $isAnonymouse;

        return $this;
    }

    /**
     * Get answerId
     *
     * @return integer
     */
    public function getAnswerId()
    {
        return $this->answer_id;
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
        $this->answer_id = $answerId;

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
     * @return QuestionQuestion
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

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
     * @return QuestionQuestion
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get questioner
     *
     * @return \ResminApiBundle\Entity\AuthUser
     */
    public function getQuestioner()
    {
        return $this->questioner;
    }

    /**
     * Set questioner
     *
     * @param \ResminApiBundle\Entity\AuthUser $questioner
     *
     * @return QuestionQuestion
     */
    public function setQuestioner(\ResminApiBundle\Entity\AuthUser $questioner = null)
    {
        $this->questioner = $questioner;

        return $this;
    }

    /**
     * Get questionMeta
     *
     * @return \ResminApiBundle\Entity\QuestionQuestionmeta
     */
    public function getQuestionMeta()
    {
        return $this->question_meta;
    }

    /**
     * Set questionMeta
     *
     * @param \ResminApiBundle\Entity\QuestionQuestionmeta $questionMeta
     *
     * @return QuestionQuestion
     */
    public function setQuestionMeta(\ResminApiBundle\Entity\QuestionQuestionmeta $questionMeta = null)
    {
        $this->question_meta = $questionMeta;

        return $this;
    }

    /**
     * Get questionee
     *
     * @return \ResminApiBundle\Entity\AuthUser
     */
    public function getQuestionee()
    {
        return $this->questionee;
    }

    /**
     * Set questionee
     *
     * @param \ResminApiBundle\Entity\AuthUser $questionee
     *
     * @return QuestionQuestion
     */
    public function setQuestionee(\ResminApiBundle\Entity\AuthUser $questionee = null)
    {
        $this->questionee = $questionee;

        return $this;
    }
}
