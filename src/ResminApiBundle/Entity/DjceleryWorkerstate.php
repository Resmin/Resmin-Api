<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DjceleryWorkerstate
 *
 * @ORM\Table(name="djcelery_workerstate", uniqueConstraints={@ORM\UniqueConstraint(name="hostname", columns={"hostname"})}, indexes={@ORM\Index(name="djcelery_workerstate_11e400ef", columns={"last_heartbeat"})})
 * @ORM\Entity
 */
class DjceleryWorkerstate
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
     * @ORM\Column(name="hostname", type="string", length=255, nullable=false)
     */
    private $hostname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_heartbeat", type="datetime", nullable=true)
     */
    private $lastHeartbeat;



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
     * Set hostname
     *
     * @param string $hostname
     *
     * @return DjceleryWorkerstate
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Get hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set lastHeartbeat
     *
     * @param \DateTime $lastHeartbeat
     *
     * @return DjceleryWorkerstate
     */
    public function setLastHeartbeat($lastHeartbeat)
    {
        $this->lastHeartbeat = $lastHeartbeat;

        return $this;
    }

    /**
     * Get lastHeartbeat
     *
     * @return \DateTime
     */
    public function getLastHeartbeat()
    {
        return $this->lastHeartbeat;
    }
}
