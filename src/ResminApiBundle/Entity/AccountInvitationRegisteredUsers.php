<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountInvitationRegisteredUsers
 *
 * @ORM\Table(name="account_invitation_registered_users", uniqueConstraints={@ORM\UniqueConstraint(name="invitation_id", columns={"invitation_id", "user_id"})}, indexes={@ORM\Index(name="account_invitation_registered_users_ed2fb8c6", columns={"invitation_id"}), @ORM\Index(name="account_invitation_registered_users_6340c63c", columns={"user_id"})})
 * @ORM\Entity
 */
class AccountInvitationRegisteredUsers
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
     * @ORM\Column(name="invitation_id", type="integer", nullable=false)
     */
    private $invitationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;



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
     * Set invitationId
     *
     * @param integer $invitationId
     *
     * @return AccountInvitationRegisteredUsers
     */
    public function setInvitationId($invitationId)
    {
        $this->invitationId = $invitationId;

        return $this;
    }

    /**
     * Get invitationId
     *
     * @return integer
     */
    public function getInvitationId()
    {
        return $this->invitationId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return AccountInvitationRegisteredUsers
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
}
