<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DjceleryPeriodictask
 *
 * @ORM\Table(name="djcelery_periodictask", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="djcelery_periodictask_8905f60d", columns={"interval_id"}), @ORM\Index(name="djcelery_periodictask_7280124f", columns={"crontab_id"})})
 * @ORM\Entity
 */
class DjceleryPeriodictask
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
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="task", type="string", length=200, nullable=false)
     */
    private $task;

    /**
     * @var integer
     *
     * @ORM\Column(name="interval_id", type="integer", nullable=true)
     */
    private $intervalId;

    /**
     * @var integer
     *
     * @ORM\Column(name="crontab_id", type="integer", nullable=true)
     */
    private $crontabId;

    /**
     * @var string
     *
     * @ORM\Column(name="args", type="text", nullable=false)
     */
    private $args;

    /**
     * @var string
     *
     * @ORM\Column(name="kwargs", type="text", nullable=false)
     */
    private $kwargs;

    /**
     * @var string
     *
     * @ORM\Column(name="queue", type="string", length=200, nullable=true)
     */
    private $queue;

    /**
     * @var string
     *
     * @ORM\Column(name="exchange", type="string", length=200, nullable=true)
     */
    private $exchange;

    /**
     * @var string
     *
     * @ORM\Column(name="routing_key", type="string", length=200, nullable=true)
     */
    private $routingKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires", type="datetime", nullable=true)
     */
    private $expires;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_run_at", type="datetime", nullable=true)
     */
    private $lastRunAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_run_count", type="integer", nullable=false)
     */
    private $totalRunCount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_changed", type="datetime", nullable=false)
     */
    private $dateChanged;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;



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
     * Set name
     *
     * @param string $name
     *
     * @return DjceleryPeriodictask
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set task
     *
     * @param string $task
     *
     * @return DjceleryPeriodictask
     */
    public function setTask($task)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * Get task
     *
     * @return string
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Set intervalId
     *
     * @param integer $intervalId
     *
     * @return DjceleryPeriodictask
     */
    public function setIntervalId($intervalId)
    {
        $this->intervalId = $intervalId;

        return $this;
    }

    /**
     * Get intervalId
     *
     * @return integer
     */
    public function getIntervalId()
    {
        return $this->intervalId;
    }

    /**
     * Set crontabId
     *
     * @param integer $crontabId
     *
     * @return DjceleryPeriodictask
     */
    public function setCrontabId($crontabId)
    {
        $this->crontabId = $crontabId;

        return $this;
    }

    /**
     * Get crontabId
     *
     * @return integer
     */
    public function getCrontabId()
    {
        return $this->crontabId;
    }

    /**
     * Set args
     *
     * @param string $args
     *
     * @return DjceleryPeriodictask
     */
    public function setArgs($args)
    {
        $this->args = $args;

        return $this;
    }

    /**
     * Get args
     *
     * @return string
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * Set kwargs
     *
     * @param string $kwargs
     *
     * @return DjceleryPeriodictask
     */
    public function setKwargs($kwargs)
    {
        $this->kwargs = $kwargs;

        return $this;
    }

    /**
     * Get kwargs
     *
     * @return string
     */
    public function getKwargs()
    {
        return $this->kwargs;
    }

    /**
     * Set queue
     *
     * @param string $queue
     *
     * @return DjceleryPeriodictask
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * Get queue
     *
     * @return string
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Set exchange
     *
     * @param string $exchange
     *
     * @return DjceleryPeriodictask
     */
    public function setExchange($exchange)
    {
        $this->exchange = $exchange;

        return $this;
    }

    /**
     * Get exchange
     *
     * @return string
     */
    public function getExchange()
    {
        return $this->exchange;
    }

    /**
     * Set routingKey
     *
     * @param string $routingKey
     *
     * @return DjceleryPeriodictask
     */
    public function setRoutingKey($routingKey)
    {
        $this->routingKey = $routingKey;

        return $this;
    }

    /**
     * Get routingKey
     *
     * @return string
     */
    public function getRoutingKey()
    {
        return $this->routingKey;
    }

    /**
     * Set expires
     *
     * @param \DateTime $expires
     *
     * @return DjceleryPeriodictask
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Get expires
     *
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return DjceleryPeriodictask
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set lastRunAt
     *
     * @param \DateTime $lastRunAt
     *
     * @return DjceleryPeriodictask
     */
    public function setLastRunAt($lastRunAt)
    {
        $this->lastRunAt = $lastRunAt;

        return $this;
    }

    /**
     * Get lastRunAt
     *
     * @return \DateTime
     */
    public function getLastRunAt()
    {
        return $this->lastRunAt;
    }

    /**
     * Set totalRunCount
     *
     * @param integer $totalRunCount
     *
     * @return DjceleryPeriodictask
     */
    public function setTotalRunCount($totalRunCount)
    {
        $this->totalRunCount = $totalRunCount;

        return $this;
    }

    /**
     * Get totalRunCount
     *
     * @return integer
     */
    public function getTotalRunCount()
    {
        return $this->totalRunCount;
    }

    /**
     * Set dateChanged
     *
     * @param \DateTime $dateChanged
     *
     * @return DjceleryPeriodictask
     */
    public function setDateChanged($dateChanged)
    {
        $this->dateChanged = $dateChanged;

        return $this;
    }

    /**
     * Get dateChanged
     *
     * @return \DateTime
     */
    public function getDateChanged()
    {
        return $this->dateChanged;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return DjceleryPeriodictask
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
