<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DjangoContentType
 *
 * @ORM\Table(name="django_content_type", uniqueConstraints={@ORM\UniqueConstraint(name="app_label", columns={"app_label", "model"})})
 * @ORM\Entity
 */
class DjangoContentType
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
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="app_label", type="string", length=100, nullable=false)
     */
    private $appLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=100, nullable=false)
     */
    private $model;



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
     * @return DjangoContentType
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
     * Set appLabel
     *
     * @param string $appLabel
     *
     * @return DjangoContentType
     */
    public function setAppLabel($appLabel)
    {
        $this->appLabel = $appLabel;

        return $this;
    }

    /**
     * Get appLabel
     *
     * @return string
     */
    public function getAppLabel()
    {
        return $this->appLabel;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return DjangoContentType
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
}
