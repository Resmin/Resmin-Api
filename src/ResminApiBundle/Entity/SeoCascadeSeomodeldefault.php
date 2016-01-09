<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeoCascadeSeomodeldefault
 *
 * @ORM\Table(name="seo_cascade_seomodeldefault", uniqueConstraints={@ORM\UniqueConstraint(name="model", columns={"model"})})
 * @ORM\Entity
 */
class SeoCascadeSeomodeldefault
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
     * @ORM\Column(name="model", type="string", length=255, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="priority", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $priority;



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
     * @return SeoCascadeSeomodeldefault
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
     * @return SeoCascadeSeomodeldefault
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
     * @return SeoCascadeSeomodeldefault
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
     * @return SeoCascadeSeomodeldefault
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
     * @return SeoCascadeSeomodeldefault
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
     * Set model
     *
     * @param string $model
     *
     * @return SeoCascadeSeomodeldefault
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set priority
     *
     * @param string $priority
     *
     * @return SeoCascadeSeomodeldefault
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }
}
