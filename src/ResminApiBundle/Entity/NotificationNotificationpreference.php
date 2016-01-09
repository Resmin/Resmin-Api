<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationNotificationpreference
 *
 * @ORM\Table(name="notification_notificationpreference", indexes={@ORM\Index(name="notification_notificationpreference_6340c63c", columns={"user_id"}), @ORM\Index(name="notification_notificationpreference_e018e350", columns={"ntype_id"})})
 * @ORM\Entity
 */
class NotificationNotificationpreference
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
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ntype_id", type="integer", nullable=false)
     */
    private $ntypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="preferences", type="text", nullable=false)
     */
    private $preferences;



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
     * Set userId
     *
     * @param integer $userId
     *
     * @return NotificationNotificationpreference
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
     * Set ntypeId
     *
     * @param integer $ntypeId
     *
     * @return NotificationNotificationpreference
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
     * Set preferences
     *
     * @param string $preferences
     *
     * @return NotificationNotificationpreference
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;

        return $this;
    }

    /**
     * Get preferences
     *
     * @return string
     */
    public function getPreferences()
    {
        return $this->preferences;
    }
}
