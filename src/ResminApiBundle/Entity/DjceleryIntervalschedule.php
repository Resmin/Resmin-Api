<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DjceleryIntervalschedule
 *
 * @ORM\Table(name="djcelery_intervalschedule")
 * @ORM\Entity
 */
class DjceleryIntervalschedule
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
     * @ORM\Column(name="every", type="integer", nullable=false)
     */
    private $every;

    /**
     * @var string
     *
     * @ORM\Column(name="period", type="string", length=24, nullable=false)
     */
    private $period;



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
     * Set every
     *
     * @param integer $every
     *
     * @return DjceleryIntervalschedule
     */
    public function setEvery($every)
    {
        $this->every = $every;

        return $this;
    }

    /**
     * Get every
     *
     * @return integer
     */
    public function getEvery()
    {
        return $this->every;
    }

    /**
     * Set period
     *
     * @param string $period
     *
     * @return DjceleryIntervalschedule
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }
}
