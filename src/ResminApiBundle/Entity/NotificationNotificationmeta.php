<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationNotificationmeta
 *
 * @ORM\Table(name="notification_notificationmeta", indexes={@ORM\Index(name="notification_notificationmeta_e018e350", columns={"ntype_id"}), @ORM\Index(name="notification_notificationmeta_3e31d986", columns={"recipient_id"})})
 * @ORM\Entity
 */
class NotificationNotificationmeta
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
     * @ORM\Column(name="ntype_id", type="integer", nullable=false)
     */
    private $ntypeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="recipient_id", type="integer", nullable=false)
     */
    private $recipientId;

    /**
     * @var string
     *
     * @ORM\Column(name="s_pks", type="string", length=4096, nullable=false)
     */
    private $sPks;

    /**
     * @var string
     *
     * @ORM\Column(name="o_pks", type="string", length=4096, nullable=false)
     */
    private $oPks;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_published", type="boolean", nullable=false)
     */
    private $isPublished;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="published_at", type="datetime", nullable=false)
     */
    private $publishedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_read", type="boolean", nullable=false)
     */
    private $isRead;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="read_at", type="datetime", nullable=true)
     */
    private $readAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;



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
     * Set ntypeId
     *
     * @param integer $ntypeId
     *
     * @return NotificationNotificationmeta
     */
    public function setNtypeId($ntypeId)
    {
        $this->ntypeId = $ntypeId;

        return $this;
    }

    /**
     * Get ntypeId
     *
     * @return integer
     */
    public function getNtypeId()
    {
        return $this->ntypeId;
    }

    /**
     * Set recipientId
     *
     * @param integer $recipientId
     *
     * @return NotificationNotificationmeta
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
     * Set sPks
     *
     * @param string $sPks
     *
     * @return NotificationNotificationmeta
     */
    public function setSPks($sPks)
    {
        $this->sPks = $sPks;

        return $this;
    }

    /**
     * Get sPks
     *
     * @return string
     */
    public function getSPks()
    {
        return $this->sPks;
    }

    /**
     * Set oPks
     *
     * @param string $oPks
     *
     * @return NotificationNotificationmeta
     */
    public function setOPks($oPks)
    {
        $this->oPks = $oPks;

        return $this;
    }

    /**
     * Get oPks
     *
     * @return string
     */
    public function getOPks()
    {
        return $this->oPks;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return NotificationNotificationmeta
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return NotificationNotificationmeta
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
     * Set isPublished
     *
     * @param boolean $isPublished
     *
     * @return NotificationNotificationmeta
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished
     *
     * @return boolean
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set publishedAt
     *
     * @param \DateTime $publishedAt
     *
     * @return NotificationNotificationmeta
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get publishedAt
     *
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set isRead
     *
     * @param boolean $isRead
     *
     * @return NotificationNotificationmeta
     */
    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;

        return $this;
    }

    /**
     * Get isRead
     *
     * @return boolean
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * Set readAt
     *
     * @param \DateTime $readAt
     *
     * @return NotificationNotificationmeta
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return NotificationNotificationmeta
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
}
