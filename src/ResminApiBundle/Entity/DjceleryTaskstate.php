<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DjceleryTaskstate
 *
 * @ORM\Table(name="djcelery_taskstate", uniqueConstraints={@ORM\UniqueConstraint(name="task_id", columns={"task_id"})}, indexes={@ORM\Index(name="djcelery_taskstate_5654bf12", columns={"state"}), @ORM\Index(name="djcelery_taskstate_4da47e07", columns={"name"}), @ORM\Index(name="djcelery_taskstate_abaacd02", columns={"tstamp"}), @ORM\Index(name="djcelery_taskstate_cac6a03d", columns={"worker_id"}), @ORM\Index(name="djcelery_taskstate_2ff6b945", columns={"hidden"})})
 * @ORM\Entity
 */
class DjceleryTaskstate
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
     * @ORM\Column(name="state", type="string", length=64, nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="task_id", type="string", length=36, nullable=false)
     */
    private $taskId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tstamp", type="datetime", nullable=false)
     */
    private $tstamp;

    /**
     * @var string
     *
     * @ORM\Column(name="args", type="text", nullable=true)
     */
    private $args;

    /**
     * @var string
     *
     * @ORM\Column(name="kwargs", type="text", nullable=true)
     */
    private $kwargs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eta", type="datetime", nullable=true)
     */
    private $eta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires", type="datetime", nullable=true)
     */
    private $expires;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="text", nullable=true)
     */
    private $result;

    /**
     * @var string
     *
     * @ORM\Column(name="traceback", type="text", nullable=true)
     */
    private $traceback;

    /**
     * @var float
     *
     * @ORM\Column(name="runtime", type="float", precision=10, scale=0, nullable=true)
     */
    private $runtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="retries", type="integer", nullable=false)
     */
    private $retries;

    /**
     * @var integer
     *
     * @ORM\Column(name="worker_id", type="integer", nullable=true)
     */
    private $workerId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden;



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
     * Set state
     *
     * @param string $state
     *
     * @return DjceleryTaskstate
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set taskId
     *
     * @param string $taskId
     *
     * @return DjceleryTaskstate
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;

        return $this;
    }

    /**
     * Get taskId
     *
     * @return string
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return DjceleryTaskstate
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
     * Set tstamp
     *
     * @param \DateTime $tstamp
     *
     * @return DjceleryTaskstate
     */
    public function setTstamp($tstamp)
    {
        $this->tstamp = $tstamp;

        return $this;
    }

    /**
     * Get tstamp
     *
     * @return \DateTime
     */
    public function getTstamp()
    {
        return $this->tstamp;
    }

    /**
     * Set args
     *
     * @param string $args
     *
     * @return DjceleryTaskstate
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
     * @return DjceleryTaskstate
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
     * Set eta
     *
     * @param \DateTime $eta
     *
     * @return DjceleryTaskstate
     */
    public function setEta($eta)
    {
        $this->eta = $eta;

        return $this;
    }

    /**
     * Get eta
     *
     * @return \DateTime
     */
    public function getEta()
    {
        return $this->eta;
    }

    /**
     * Set expires
     *
     * @param \DateTime $expires
     *
     * @return DjceleryTaskstate
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
     * Set result
     *
     * @param string $result
     *
     * @return DjceleryTaskstate
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set traceback
     *
     * @param string $traceback
     *
     * @return DjceleryTaskstate
     */
    public function setTraceback($traceback)
    {
        $this->traceback = $traceback;

        return $this;
    }

    /**
     * Get traceback
     *
     * @return string
     */
    public function getTraceback()
    {
        return $this->traceback;
    }

    /**
     * Set runtime
     *
     * @param float $runtime
     *
     * @return DjceleryTaskstate
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * Get runtime
     *
     * @return float
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Set retries
     *
     * @param integer $retries
     *
     * @return DjceleryTaskstate
     */
    public function setRetries($retries)
    {
        $this->retries = $retries;

        return $this;
    }

    /**
     * Get retries
     *
     * @return integer
     */
    public function getRetries()
    {
        return $this->retries;
    }

    /**
     * Set workerId
     *
     * @param integer $workerId
     *
     * @return DjceleryTaskstate
     */
    public function setWorkerId($workerId)
    {
        $this->workerId = $workerId;

        return $this;
    }

    /**
     * Get workerId
     *
     * @return integer
     */
    public function getWorkerId()
    {
        return $this->workerId;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return DjceleryTaskstate
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean
     */
    public function getHidden()
    {
        return $this->hidden;
    }
}
