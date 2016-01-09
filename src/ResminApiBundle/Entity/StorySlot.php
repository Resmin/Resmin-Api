<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StorySlot
 *
 * @ORM\Table(name="story_slot", indexes={@ORM\Index(name="story_slot_734ee247", columns={"story_id"}), @ORM\Index(name="story_slot_431b9d2e", columns={"cTp_id"})})
 * @ORM\Entity
 */
class StorySlot
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
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var integer
     *
     * @ORM\Column(name="story_id", type="integer", nullable=true)
     */
    private $storyId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=144, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="cPk", type="integer", nullable=false)
     */
    private $cpk;

    /**
     * @var integer
     *
     * @ORM\Column(name="cTp_id", type="integer", nullable=false)
     */
    private $ctpId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;



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
     * Set order
     *
     * @param integer $order
     *
     * @return StorySlot
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set storyId
     *
     * @param integer $storyId
     *
     * @return StorySlot
     */
    public function setStoryId($storyId)
    {
        $this->storyId = $storyId;

        return $this;
    }

    /**
     * Get storyId
     *
     * @return integer
     */
    public function getStoryId()
    {
        return $this->storyId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return StorySlot
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return StorySlot
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

    /**
     * Set cpk
     *
     * @param integer $cpk
     *
     * @return StorySlot
     */
    public function setCpk($cpk)
    {
        $this->cpk = $cpk;

        return $this;
    }

    /**
     * Get cpk
     *
     * @return integer
     */
    public function getCpk()
    {
        return $this->cpk;
    }

    /**
     * Set ctpId
     *
     * @param integer $ctpId
     *
     * @return StorySlot
     */
    public function setCtpId($ctpId)
    {
        $this->ctpId = $ctpId;

        return $this;
    }

    /**
     * Get ctpId
     *
     * @return integer
     */
    public function getCtpId()
    {
        return $this->ctpId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return StorySlot
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
}
