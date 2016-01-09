<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationSitenotification
 *
 * @ORM\Table(name="notification_sitenotification", indexes={@ORM\Index(name="notification_sitenotification_a6b50b9d", columns={"meta_id"})})
 * @ORM\Entity
 */
class NotificationSitenotification
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
     * @ORM\Column(name="meta_id", type="integer", nullable=false)
     */
    private $metaId;



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
     * Set metaId
     *
     * @param integer $metaId
     *
     * @return NotificationSitenotification
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
}
