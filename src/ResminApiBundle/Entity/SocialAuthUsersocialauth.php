<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocialAuthUsersocialauth
 *
 * @ORM\Table(name="social_auth_usersocialauth", uniqueConstraints={@ORM\UniqueConstraint(name="provider", columns={"provider", "uid"})}, indexes={@ORM\Index(name="social_auth_usersocialauth_6340c63c", columns={"user_id"})})
 * @ORM\Entity
 */
class SocialAuthUsersocialauth
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
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="provider", type="string", length=32, nullable=false)
     */
    private $provider;

    /**
     * @var string
     *
     * @ORM\Column(name="uid", type="string", length=222, nullable=false)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_data", type="text", length=65535, nullable=false)
     */
    private $extraData;



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
     * Set userId
     *
     * @param integer $userId
     *
     * @return SocialAuthUsersocialauth
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set provider
     *
     * @param string $provider
     *
     * @return SocialAuthUsersocialauth
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set uid
     *
     * @param string $uid
     *
     * @return SocialAuthUsersocialauth
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set extraData
     *
     * @param string $extraData
     *
     * @return SocialAuthUsersocialauth
     */
    public function setExtraData($extraData)
    {
        $this->extraData = $extraData;

        return $this;
    }

    /**
     * Get extraData
     *
     * @return string
     */
    public function getExtraData()
    {
        return $this->extraData;
    }
}
