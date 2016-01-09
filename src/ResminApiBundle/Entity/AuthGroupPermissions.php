<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthGroupPermissions
 *
 * @ORM\Table(name="auth_group_permissions", uniqueConstraints={@ORM\UniqueConstraint(name="group_id", columns={"group_id", "permission_id"})}, indexes={@ORM\Index(name="auth_group_permissions_5f412f9a", columns={"group_id"}), @ORM\Index(name="auth_group_permissions_83d7f98b", columns={"permission_id"})})
 * @ORM\Entity
 */
class AuthGroupPermissions
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
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     */
    private $groupId;

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
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return AuthGroupPermissions
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set permissionId
     *
     * @param integer $permissionId
     *
     * @return AuthGroupPermissions
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
