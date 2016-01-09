<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthUserUserPermissions
 *
 * @ORM\Table(name="auth_user_user_permissions", uniqueConstraints={@ORM\UniqueConstraint(name="user_id", columns={"user_id", "permission_id"})}, indexes={@ORM\Index(name="auth_user_user_permissions_6340c63c", columns={"user_id"}), @ORM\Index(name="auth_user_user_permissions_83d7f98b", columns={"permission_id"})})
 * @ORM\Entity
 */
class AuthUserUserPermissions
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
     * @var integer
     *
     * @ORM\Column(name="permission_id", type="integer", nullable=false)
     */
    private $permissionId;



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
     * @return AuthUserUserPermissions
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
     * Set permissionId
     *
     * @param integer $permissionId
     *
     * @return AuthUserUserPermissions
     */
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;

        return $this;
    }

    /**
     * Get permissionId
     *
     * @return integer
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }
}
