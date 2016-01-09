<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountInvitation
 *
 * @ORM\Table(name="account_invitation", indexes={@ORM\Index(name="account_invitation_cb902d83", columns={"owner_id"})})
 * @ORM\Entity
 */
class AccountInvitation
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
     * @ORM\Column(name="owner_id", type="integer", nullable=true)
     */
    private $ownerId;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=255, nullable=false)
     */
    private $key;

    /**
     * @var integer
     *
     * @ORM\Column(name="used_count", type="integer", nullable=false)
     */
    private $usedCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="use_limit", type="integer", nullable=false)
     */
    private $useLimit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_usable", type="boolean", nullable=false)
     */
    private $isUsable;



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
     * Set ownerId
     *
     * @param integer $ownerId
     *
     * @return AccountInvitation
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return AccountInvitation
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set usedCount
     *
     * @param integer $usedCount
     *
     * @return AccountInvitation
     */
    public function setUsedCount($usedCount)
    {
        $this->usedCount = $usedCount;

        return $this;
    }

    /**
     * Get usedCount
     *
     * @return integer
     */
    public function getUsedCount()
    {
        return $this->usedCount;
    }

    /**
     * Set useLimit
     *
     * @param integer $useLimit
     *
     * @return AccountInvitation
     */
    public function setUseLimit($useLimit)
    {
        $this->useLimit = $useLimit;

        return $this;
    }

    /**
     * Get useLimit
     *
     * @return integer
     */
    public function getUseLimit()
    {
        return $this->useLimit;
    }

    /**
     * Set isUsable
     *
     * @param boolean $isUsable
     *
     * @return AccountInvitation
     */
    public function setIsUsable($isUsable)
    {
        $this->isUsable = $isUsable;

        return $this;
    }

    /**
     * Get isUsable
     *
     * @return boolean
     */
    public function getIsUsable()
    {
        return $this->isUsable;
    }
}
