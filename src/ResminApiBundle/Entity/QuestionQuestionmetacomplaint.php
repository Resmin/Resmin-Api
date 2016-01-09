<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionQuestionmetacomplaint
 *
 * @ORM\Table(name="question_questionmetacomplaint", indexes={@ORM\Index(name="question_questionmetacomplaint_e596261c", columns={"question_meta_id"})})
 * @ORM\Entity
 */
class QuestionQuestionmetacomplaint
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
     * @ORM\Column(name="question_meta_id", type="integer", nullable=false)
     */
    private $questionMetaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="complaint_type", type="integer", nullable=false)
     */
    private $complaintType;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;



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
     * Set questionMetaId
     *
     * @param integer $questionMetaId
     *
     * @return QuestionQuestionmetacomplaint
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

    /**
     * Set complaintType
     *
     * @param integer $complaintType
     *
     * @return QuestionQuestionmetacomplaint
     */
    public function setComplaintType($complaintType)
    {
        $this->complaintType = $complaintType;

        return $this;
    }

    /**
     * Get complaintType
     *
     * @return integer
     */
    public function getComplaintType()
    {
        return $this->complaintType;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return QuestionQuestionmetacomplaint
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
     * Set description
     *
     * @param string $description
     *
     * @return QuestionQuestionmetacomplaint
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
}
