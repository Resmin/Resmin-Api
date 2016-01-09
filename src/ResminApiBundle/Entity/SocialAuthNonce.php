<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocialAuthNonce
 *
 * @ORM\Table(name="social_auth_nonce", uniqueConstraints={@ORM\UniqueConstraint(name="server_url", columns={"server_url", "timestamp", "salt"})}, indexes={@ORM\Index(name="social_auth_nonce_d80b9c9a", columns={"timestamp"})})
 * @ORM\Entity
 */
class SocialAuthNonce
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
     * @ORM\Column(name="server_url", type="string", length=200, nullable=false)
     */
    private $serverUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=40, nullable=false)
     */
    private $salt;



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
     * @return SocialAuthNonce
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
     * Set timestamp
     *
     * @param integer $timestamp
     *
     * @return SocialAuthNonce
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return SocialAuthNonce
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }
}
