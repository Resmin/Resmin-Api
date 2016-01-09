<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DjangoAdminLog
 *
 * @ORM\Table(name="django_admin_log", indexes={@ORM\Index(name="django_admin_log_6340c63c", columns={"user_id"}), @ORM\Index(name="django_admin_log_37ef4eb4", columns={"content_type_id"})})
 * @ORM\Entity
 */
class DjangoAdminLog
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
     * @var \DateTime
     *
     * @ORM\Column(name="action_time", type="datetime", nullable=false)
     */
    private $actionTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_type_id", type="integer", nullable=true)
     */
    private $contentTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="object_id", type="text", length=65535, nullable=true)
     */
    private $objectId;

    /**
     * @var string
     *
     * @ORM\Column(name="object_repr", type="string", length=200, nullable=false)
     */
    private $objectRepr;

    /**
     * @var integer
     *
     * @ORM\Column(name="action_flag", type="smallint", nullable=false)
     */
    private $actionFlag;

    /**
     * @var string
     *
     * @ORM\Column(name="change_message", type="text", length=65535, nullable=false)
     */
    private $changeMessage;



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
     * Set actionTime
     *
     * @param \DateTime $actionTime
     *
     * @return DjangoAdminLog
     */
    public function setActionTime($actionTime)
    {
        $this->actionTime = $actionTime;

        return $this;
    }

    /**
     * Get actionTime
     *
     * @return \DateTime
     */
    public function getActionTime()
    {
        return $this->actionTime;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return DjangoAdminLog
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

    /**
     * Set contentTypeId
     *
     * @param integer $contentTypeId
     *
     * @return DjangoAdminLog
     */
    public function setContentTypeId($contentTypeId)
    {
        $this->contentTypeId = $contentTypeId;

        return $this;
    }

    /**
     * Get contentTypeId
     *
     * @return integer
     */
    public function getContentTypeId()
    {
        return $this->contentTypeId;
    }

    /**
     * Set objectId
     *
     * @param string $objectId
     *
     * @return DjangoAdminLog
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Get objectId
     *
     * @return string
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set objectRepr
     *
     * @param string $objectRepr
     *
     * @return DjangoAdminLog
     */
    public function setObjectRepr($objectRepr)
    {
        $this->objectRepr = $objectRepr;

        return $this;
    }

    /**
     * Get objectRepr
     *
     * @return string
     */
    public function getObjectRepr()
    {
        return $this->objectRepr;
    }

    /**
     * Set actionFlag
     *
     * @param integer $actionFlag
     *
     * @return DjangoAdminLog
     */
    public function setActionFlag($actionFlag)
    {
        $this->actionFlag = $actionFlag;

        return $this;
    }

    /**
     * Get actionFlag
     *
     * @return integer
     */
    public function getActionFlag()
    {
        return $this->actionFlag;
    }

    /**
     * Set changeMessage
     *
     * @param string $changeMessage
     *
     * @return DjangoAdminLog
     */
    public function setChangeMessage($changeMessage)
    {
        $this->changeMessage = $changeMessage;

        return $this;
    }

    /**
     * Get changeMessage
     *
     * @return string
     */
    public function getChangeMessage()
    {
        return $this->changeMessage;
    }
}
