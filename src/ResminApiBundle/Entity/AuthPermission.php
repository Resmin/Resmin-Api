<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthPermission
 *
 * @ORM\Table(name="auth_permission", uniqueConstraints={@ORM\UniqueConstraint(name="content_type_id", columns={"content_type_id", "codename"})}, indexes={@ORM\Index(name="auth_permission_37ef4eb4", columns={"content_type_id"})})
 * @ORM\Entity
 */
class AuthPermission
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_type_id", type="integer", nullable=false)
     */
    private $contentTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="codename", type="string", length=100, nullable=false)
     */
    private $codename;



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
     * @return AuthPermission
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
     * Set contentTypeId
     *
     * @param integer $contentTypeId
     *
     * @return AuthPermission
     */
    public function setContentTypeId($contentTypeId)
    {
        $this->contentTypeId = $contentTypeId;

        return $this;
    }

    /**
     * Get contentTypeId
     *
     * @return integer
     */
    public function getContentTypeId()
    {
        return $this->contentTypeId;
    }

    /**
     * Set codename
     *
     * @param string $codename
     *
     * @return AuthPermission
     */
    public function setCodename($codename)
    {
        $this->codename = $codename;

        return $this;
    }

    /**
     * Get codename
     *
     * @return string
     */
    public function getCodename()
    {
        return $this->codename;
    }
}
