<?php
namespace ResminApiBundle\Service;

use Doctrine\Common\Cache\Cache;
use ResminApiBundle\Entity\AuthUser;
use ResminApiBundle\Security\AccessToken;

/**
 * Class AccessTokenService
 * @package ResminApiBundle\Service
 */
class AccessTokenService
{

    /**
     * @var Cache
     */
    private $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    /**
     * @param $token
     * @param AuthUser $user
     * @return AccessToken
     */
    public function insertAccessToken($token, AuthUser $user)
    {
        $accessToken = new AccessToken();
        $accessToken->setCreatedAt(new \DateTime())
            ->setId($token)
            ->setUsername($user->getUsername());

        $this->cache->save($token, $accessToken, 604800);

        return $accessToken;
    }


}