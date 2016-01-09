<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoryImage
 *
 * @ORM\Table(name="story_image")
 * @ORM\Entity
 */
class StoryImage
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
     * @ORM\Column(name="md5sum", type="string", length=36, nullable=false)
     */
    private $md5sum;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=false)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="taken_at", type="datetime", nullable=true)
     */
    private $takenAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_playble", type="boolean", nullable=false)
     */
    private $isPlayble;

    /**
     * @var string
     *
     * @ORM\Column(name="mime_type", type="string", length=64, nullable=false)
     */
    private $mimeType;



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
     * Set md5sum
     *
     * @param string $md5sum
     *
     * @return StoryImage
     */
    public function setMd5sum($md5sum)
    {
        $this->md5sum = $md5sum;

        return $this;
    }

    /**
     * Get md5sum
     *
     * @return string
     */
    public function getMd5sum()
    {
        return $this->md5sum;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return StoryImage
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set takenAt
     *
     * @param \DateTime $takenAt
     *
     * @return StoryImage
     */
    public function setTakenAt($takenAt)
    {
        $this->takenAt = $takenAt;

        return $this;
    }

    /**
     * Get takenAt
     *
     * @return \DateTime
     */
    public function getTakenAt()
    {
        return $this->takenAt;
    }

    /**
     * Set isPlayble
     *
     * @param boolean $isPlayble
     *
     * @return StoryImage
     */
    public function setIsPlayble($isPlayble)
    {
        $this->isPlayble = $isPlayble;

        return $this;
    }

    /**
     * Get isPlayble
     *
     * @return boolean
     */
    public function getIsPlayble()
    {
        return $this->isPlayble;
    }

    /**
     * Set mimeType
     *
     * @param string $mimeType
     *
     * @return StoryImage
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get mimeType
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }
}
