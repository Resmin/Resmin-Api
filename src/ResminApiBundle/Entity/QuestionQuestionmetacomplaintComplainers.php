<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionQuestionmetacomplaintComplainers
 *
 * @ORM\Table(name="question_questionmetacomplaint_complainers", uniqueConstraints={@ORM\UniqueConstraint(name="questionmetacomplaint_id", columns={"questionmetacomplaint_id", "user_id"})}, indexes={@ORM\Index(name="question_questionmetacomplaint_complainers_17b6818d", columns={"questionmetacomplaint_id"}), @ORM\Index(name="question_questionmetacomplaint_complainers_6340c63c", columns={"user_id"})})
 * @ORM\Entity
 */
class QuestionQuestionmetacomplaintComplainers
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
     * @ORM\Column(name="questionmetacomplaint_id", type="integer", nullable=false)
     */
    private $questionmetacomplaintId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;



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
     * Set questionmetacomplaintId
     *
     * @param integer $questionmetacomplaintId
     *
     * @return QuestionQuestionmetacomplaintComplainers
     */
    public function setQuestionmetacomplaintId($questionmetacomplaintId)
    {
        $this->questionmetacomplaintId = $questionmetacomplaintId;

        return $this;
    }

    /**
     * Get questionmetacomplaintId
     *
     * @return integer
     */
    public function getQuestionmetacomplaintId()
    {
        return $this->questionmetacomplaintId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return QuestionQuestionmetacomplaintComplainers
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
