<?php

namespace ResminApiBundle\Service;

use Doctrine\ORM\EntityRepository;
use ResminApiBundle\Repository\AuthUserRepository;

/**
 *
 * For validating and generating passwords: http://stackoverflow.com/a/25969798/1241624
 *
 * Class AuthService
 * @package ResminApiBundle\Service
 */
class AuthService
{

    /**
     * @var AuthUserRepository
     */
    private $authUserRepository;

    public function __construct(EntityRepository $authUserRepository)
    {
        $this->authUserRepository = $authUserRepository;
    }

    public function getUserByUsername($username)
    {
        return $this->authUserRepository->findOneByUsername($username);
    }

    public function checkUsernamePassword($username, $password)
    {
        $user = $this->authUserRepository->findOneBy(['username' => $username]);

        if (!$user) {
            return false;
        }

        $passwordValid = $this->verifyPassword($user->getPassword(), $password);

        if ($passwordValid == false) {
            return false;
        }

        return $user;
    }

    public function verifyPassword($hashedPassword, $password)
    {
        $pieces = explode("$", $hashedPassword);
        if (count($pieces) < 4) {
            return false;
        }

        $iterations = $pieces[1];
        $salt = $pieces[2];
        $old_hash = $pieces[3];

        $hash = hash_pbkdf2("SHA256", $password, $salt, $iterations, 0, true);
        $hash = base64_encode($hash);

        if ($hash == $old_hash) {
            return true;
        } else {
            return false;
        }
    }

    public function makePassword($password)
    {
        $algorithm = "pbkdf2_sha256";
        $iterations = 12000;

        $newSalt = mcrypt_create_iv(6, MCRYPT_DEV_URANDOM);
        $newSalt = base64_encode($newSalt);

        $hash = hash_pbkdf2("SHA256", $password, $newSalt, $iterations, 0, true);
        $toDBStr = $algorithm . "$" . $iterations . "$" . $newSalt . "$" . base64_encode($hash);

        return $toDBStr;
    }
}