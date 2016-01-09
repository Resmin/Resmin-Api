<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DjceleryPeriodictasks
 *
 * @ORM\Table(name="djcelery_periodictasks")
 * @ORM\Entity
 */
class DjceleryPeriodictasks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ident", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ident;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;



    /**
     * Get ident
     *
     * @return integer
     */
    public function getIdent()
    {
        return $this->ident;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     *
     * @return DjceleryPeriodictasks
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }
}
