<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmMessage
 *
 * @ORM\Table(name="pm_message", indexes={@ORM\Index(name="pm_message_0a681a64", columns={"sender_id"}), @ORM\Index(name="pm_message_3e31d986", columns={"recipient_id"}), @ORM\Index(name="pm_message_cd3bbc30", columns={"parent_msg_id"})})
 * @ORM\Entity
 */
class PmMessage
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
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=120, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var integer
     *
     * @ORM\Column(name="sender_id", type="integer", nullable=false)
     */
    private $senderId;

    /**
     * @var integer
     *
     * @ORM\Column(name="recipient_id", type="integer", nullable=true)
     */
    private $recipientId;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_msg_id", type="integer", nullable=true)
     */
    private $parentMsgId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sent_at", type="datetime", nullable=true)
     */
    private $sentAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="read_at", type="datetime", nullable=true)
     */
    private $readAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="replied_at", type="datetime", nullable=true)
     */
    private $repliedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sender_deleted_at", type="datetime", nullable=true)
     */
    private $senderDeletedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="recipient_deleted_at", type="datetime", nullable=true)
     */
    private $recipientDeletedAt;



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
     * Set subject
     *
     * @param string $subject
     *
     * @return PmMessage
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return PmMessage
     */
    public function setBody($body)
    {
        $this->body = $body;

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
     * Set senderId
     *
     * @param integer $senderId
     *
     * @return PmMessage
     */
    public function setSenderId($senderId)
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get senderId
     *
     * @return integer
     */
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * Set recipientId
     *
     * @param integer $recipientId
     *
     * @return PmMessage
     */
    public function setRecipientId($recipientId)
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * Get recipientId
     *
     * @return integer
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * Set parentMsgId
     *
     * @param integer $parentMsgId
     *
     * @return PmMessage
     */
    public function setParentMsgId($parentMsgId)
    {
        $this->parentMsgId = $parentMsgId;

        return $this;
    }

    /**
     * Get parentMsgId
     *
     * @return integer
     */
    public function getParentMsgId()
    {
        return $this->parentMsgId;
    }

    /**
     * Set sentAt
     *
     * @param \DateTime $sentAt
     *
     * @return PmMessage
     */
    public function setSentAt($sentAt)
    {
        $this->sentAt = $sentAt;

        return $this;
    }

    /**
     * Get sentAt
     *
     * @return \DateTime
     */
    public function getSentAt()
    {
        return $this->sentAt;
    }

    /**
     * Set readAt
     *
     * @param \DateTime $readAt
     *
     * @return PmMessage
     */
    public function setReadAt($readAt)
    {
        $this->readAt = $readAt;

        return $this;
    }

    /**
     * Get readAt
     *
     * @return \DateTime
     */
    public function getReadAt()
    {
        return $this->readAt;
    }

    /**
     * Set repliedAt
     *
     * @param \DateTime $repliedAt
     *
     * @return PmMessage
     */
    public function setRepliedAt($repliedAt)
    {
        $this->repliedAt = $repliedAt;

        return $this;
    }

    /**
     * Get repliedAt
     *
     * @return \DateTime
     */
    public function getRepliedAt()
    {
        return $this->repliedAt;
    }

    /**
     * Set senderDeletedAt
     *
     * @param \DateTime $senderDeletedAt
     *
     * @return PmMessage
     */
    public function setSenderDeletedAt($senderDeletedAt)
    {
        $this->senderDeletedAt = $senderDeletedAt;

        return $this;
    }

    /**
     * Get senderDeletedAt
     *
     * @return \DateTime
     */
    public function getSenderDeletedAt()
    {
        return $this->senderDeletedAt;
    }

    /**
     * Set recipientDeletedAt
     *
     * @param \DateTime $recipientDeletedAt
     *
     * @return PmMessage
     */
    public function setRecipientDeletedAt($recipientDeletedAt)
    {
        $this->recipientDeletedAt = $recipientDeletedAt;

        return $this;
    }

    /**
     * Get recipientDeletedAt
     *
     * @return \DateTime
     */
    public function getRecipientDeletedAt()
    {
        return $this->recipientDeletedAt;
    }
}
