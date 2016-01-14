<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StorySlot
 *
 * @ORM\Table(name="story_slot", indexes={@ORM\Index(name="story_slot_734ee247", columns={"story_id"}), @ORM\Index(name="story_slot_431b9d2e", columns={"cTp_id"})})
 * @ORM\Entity(repositoryClass="ResminApiBundle\Repository\StorySlotRepository")"
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
    private $story_id;

    /**
     * @var \StoryStory
     *
     * @ORM\ManyToOne(targetEntity="StoryStory", inversedBy="slots")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="story_id", referencedColumnName="id")
     * })
     */
    private $story;

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
    private $cPk;


    /**
     * @var \StoryStory
     *
     * @ORM\ManyToOne(targetEntity="StoryImage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cPk", referencedColumnName="id")
     * })
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="cTp_id", type="integer", nullable=false)
     */
    private $cTp_id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $created_at;



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
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
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
     * Get storyId
     *
     * @return integer
     */
    public function getStoryId()
    {
        return $this->story_id;
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
        $this->story_id = $storyId;

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
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * Get cPk
     *
     * @return integer
     */
    public function getCPk()
    {
        return $this->cPk;
    }

    /**
     * Set cPk
     *
     * @param integer $cPk
     *
     * @return StorySlot
     */
    public function setCPk($cPk)
    {
        $this->cPk = $cPk;

        return $this;
    }

    /**
     * Get cTpId
     *
     * @return integer
     */
    public function getCTpId()
    {
        return $this->cTp_id;
    }

    /**
     * Set cTpId
     *
     * @param integer $cTpId
     *
     * @return StorySlot
     */
    public function setCTpId($cTpId)
    {
        $this->cTp_id = $cTpId;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
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
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get story
     *
     * @return \ResminApiBundle\Entity\StoryStory
     */
    public function getStory()
    {
        return $this->story;
    }

    /**
     * Set story
     *
     * @param \ResminApiBundle\Entity\StoryStory $story
     *
     * @return StorySlot
     */
    public function setStory(\ResminApiBundle\Entity\StoryStory $story = null)
    {
        $this->story = $story;

        return $this;
    }

    /**
     * Get image
     *
     * @return \ResminApiBundle\Entity\StoryImage
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set image
     *
     * @param \ResminApiBundle\Entity\StoryImage $image
     *
     * @return StorySlot
     */
    public function setImage(\ResminApiBundle\Entity\StoryImage $image = null)
    {
        $this->image = $image;

        return $this;
    }
}
