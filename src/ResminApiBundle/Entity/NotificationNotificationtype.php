<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationNotificationtype
 *
 * @ORM\Table(name="notification_notificationtype", indexes={@ORM\Index(name="notification_notificationtype_f52cfca0", columns={"slug"}), @ORM\Index(name="notification_notificationtype_bc3e0a98", columns={"s_ct_id"}), @ORM\Index(name="notification_notificationtype_159f5536", columns={"o_ct_id"})})
 * @ORM\Entity
 */
class NotificationNotificationtype
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
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="default_preferences", type="text", nullable=false)
     */
    private $defaultPreferences;

    /**
     * @var string
     *
     * @ORM\Column(name="plural", type="string", length=32, nullable=true)
     */
    private $plural;

    /**
     * @var integer
     *
     * @ORM\Column(name="s_ct_id", type="integer", nullable=false)
     */
    private $sCtId;

    /**
     * @var integer
     *
     * @ORM\Column(name="o_ct_id", type="integer", nullable=false)
     */
    private $oCtId;

    /**
     * @var integer
     *
     * @ORM\Column(name="collecting_period", type="smallint", nullable=false)
     */
    private $collectingPeriod;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;



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
     * Set slug
     *
     * @param string $slug
     *
     * @return NotificationNotificationtype
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set defaultPreferences
     *
     * @param string $defaultPreferences
     *
     * @return NotificationNotificationtype
     */
    public function setDefaultPreferences($defaultPreferences)
    {
        $this->defaultPreferences = $defaultPreferences;

        return $this;
    }

    /**
     * Get defaultPreferences
     *
     * @return string
     */
    public function getDefaultPreferences()
    {
        return $this->defaultPreferences;
    }

    /**
     * Set plural
     *
     * @param string $plural
     *
     * @return NotificationNotificationtype
     */
    public function setPlural($plural)
    {
        $this->plural = $plural;

        return $this;
    }

    /**
     * Get plural
     *
     * @return string
     */
    public function getPlural()
    {
        return $this->plural;
    }

    /**
     * Set sCtId
     *
     * @param integer $sCtId
     *
     * @return NotificationNotificationtype
     */
    public function setSCtId($sCtId)
    {
        $this->sCtId = $sCtId;

        return $this;
    }

    /**
     * Get sCtId
     *
     * @return integer
     */
    public function getSCtId()
    {
        return $this->sCtId;
    }

    /**
     * Set oCtId
     *
     * @param integer $oCtId
     *
     * @return NotificationNotificationtype
     */
    public function setOCtId($oCtId)
    {
        $this->oCtId = $oCtId;

        return $this;
    }

    /**
     * Get oCtId
     *
     * @return integer
     */
    public function getOCtId()
    {
        return $this->oCtId;
    }

    /**
     * Set collectingPeriod
     *
     * @param integer $collectingPeriod
     *
     * @return NotificationNotificationtype
     */
    public function setCollectingPeriod($collectingPeriod)
    {
        $this->collectingPeriod = $collectingPeriod;

        return $this;
    }

    /**
     * Get collectingPeriod
     *
     * @return integer
     */
    public function getCollectingPeriod()
    {
        return $this->collectingPeriod;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return NotificationNotificationtype
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}
