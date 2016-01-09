<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeoCascadeSeopageoverride
 *
 * @ORM\Table(name="seo_cascade_seopageoverride")
 * @ORM\Entity
 */
class SeoCascadeSeopageoverride
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
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="meta", type="text", length=65535, nullable=true)
     */
    private $meta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="omit", type="boolean", nullable=false)
     */
    private $omit;

    /**
     * @var string
     *
     * @ORM\Column(name="changefreq", type="string", length=50, nullable=true)
     */
    private $changefreq;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image;



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
     * Set title
     *
     * @param string $title
     *
     * @return SeoCascadeSeopageoverride
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
     * @return SeoCascadeSeopageoverride
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
     * Set meta
     *
     * @param string $meta
     *
     * @return SeoCascadeSeopageoverride
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * Get meta
     *
     * @return string
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Set omit
     *
     * @param boolean $omit
     *
     * @return SeoCascadeSeopageoverride
     */
    public function setOmit($omit)
    {
        $this->omit = $omit;

        return $this;
    }

    /**
     * Get omit
     *
     * @return boolean
     */
    public function getOmit()
    {
        return $this->omit;
    }

    /**
     * Set changefreq
     *
     * @param string $changefreq
     *
     * @return SeoCascadeSeopageoverride
     */
    public function setChangefreq($changefreq)
    {
        $this->changefreq = $changefreq;

        return $this;
    }

    /**
     * Get changefreq
     *
     * @return string
     */
    public function getChangefreq()
    {
        return $this->changefreq;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return SeoCascadeSeopageoverride
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return SeoCascadeSeopageoverride
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
}
