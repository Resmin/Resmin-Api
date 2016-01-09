<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocialAuthAssociation
 *
 * @ORM\Table(name="social_auth_association", uniqueConstraints={@ORM\UniqueConstraint(name="server_url", columns={"server_url", "handle"})}, indexes={@ORM\Index(name="social_auth_association_93d95bdf", columns={"issued"})})
 * @ORM\Entity
 */
class SocialAuthAssociation
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
     * @ORM\Column(name="server_url", type="string", length=135, nullable=false)
     */
    private $serverUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="handle", type="string", length=125, nullable=false)
     */
    private $handle;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=255, nullable=false)
     */
    private $secret;

    /**
     * @var integer
     *
     * @ORM\Column(name="issued", type="integer", nullable=false)
     */
    private $issued;

    /**
     * @var integer
     *
     * @ORM\Column(name="lifetime", type="integer", nullable=false)
     */
    private $lifetime;

    /**
     * @var string
     *
     * @ORM\Column(name="assoc_type", type="string", length=64, nullable=false)
     */
    private $assocType;



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
     * Set serverUrl
     *
     * @param string $serverUrl
     *
     * @return SocialAuthAssociation
     */
    public function setServerUrl($serverUrl)
    {
        $this->serverUrl = $serverUrl;

        return $this;
    }

    /**
     * Get serverUrl
     *
     * @return string
     */
    public function getServerUrl()
    {
        return $this->serverUrl;
    }

    /**
     * Set handle
     *
     * @param string $handle
     *
     * @return SocialAuthAssociation
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * Get handle
     *
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * Set secret
     *
     * @param string $secret
     *
     * @return SocialAuthAssociation
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set issued
     *
     * @param integer $issued
     *
     * @return SocialAuthAssociation
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;

        return $this;
    }

    /**
     * Get issued
     *
     * @return integer
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * Set lifetime
     *
     * @param integer $lifetime
     *
     * @return SocialAuthAssociation
     */
    public function setLifetime($lifetime)
    {
        $this->lifetime = $lifetime;

        return $this;
    }

    /**
     * Get lifetime
     *
     * @return integer
     */
    public function getLifetime()
    {
        return $this->lifetime;
    }

    /**
     * Set assocType
     *
     * @param string $assocType
     *
     * @return SocialAuthAssociation
     */
    public function setAssocType($assocType)
    {
        $this->assocType = $assocType;

        return $this;
    }

    /**
     * Get assocType
     *
     * @return string
     */
    public function getAssocType()
    {
        return $this->assocType;
    }
}
