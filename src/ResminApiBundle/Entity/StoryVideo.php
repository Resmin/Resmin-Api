<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoryVideo
 *
 * @ORM\Table(name="story_video")
 * @ORM\Entity
 */
class StoryVideo
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
     * @ORM\Column(name="video", type="string", length=100, nullable=false)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="frame", type="string", length=100, nullable=false)
     */
    private $frame;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="taken_at", type="datetime", nullable=true)
     */
    private $takenAt;

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
     * @return StoryVideo
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
     * Set video
     *
     * @param string $video
     *
     * @return StoryVideo
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set frame
     *
     * @param string $frame
     *
     * @return StoryVideo
     */
    public function setFrame($frame)
    {
        $this->frame = $frame;

        return $this;
    }

    /**
     * Get frame
     *
     * @return string
     */
    public function getFrame()
    {
        return $this->frame;
    }

    /**
     * Set takenAt
     *
     * @param \DateTime $takenAt
     *
     * @return StoryVideo
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
     * Set mimeType
     *
     * @param string $mimeType
     *
     * @return StoryVideo
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
