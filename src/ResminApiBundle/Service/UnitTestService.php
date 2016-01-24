<?php

namespace ResminApiBundle\Service;

use Doctrine\Common\Cache\Cache;

class UnitTestService
{

    private $username;
    private $password;
    /**
     * @var AuthService
     */
    private $authService;
    /**
     * @var AccessTokenService
     */
    private $accessTokenService;
    /**
     * @var Cache
     */
    private $cache;

    /**
     * UnitTestService constructor.
     * @param $username
     * @param $password
     * @param AuthService $authService
     * @param AccessTokenService $accessTokenService
     * @param Cache $cache
     */
    public function __construct(
        $username, $password,
        AuthService $authService, AccessTokenService $accessTokenService,
        Cache $cache
    )
    {
        $this->authService = $authService;
        $this->accessTokenService = $accessTokenService;
        $this->cache = $cache;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @param string|null
     * @return mixed
     */
    public function getHeaders()
    {
        $headers = $this->cache->fetch('unittest_headers');
        if (isset($headers['HTTP_x-access-token']) && !empty($headers['HTTP_x-access-token'])) {
            $user = $this->accessTokenService->getUserByAccessToken($headers['HTTP_x-access-token']);
            if ($user == false) {
                /**
                 * refresh access token because cached one is non-valid.
                 */
                unset($headers['HTTP_x-access-token']);
            }
        }

        if ((!isset($headers['HTTP_x-access-token']) || empty($headers['HTTP_x-access-token'])) && !empty($this->username)) {
            $user = $this->authService->checkUsernamePassword($this->username, $this->password);

            if ($user !== false) {
                $accessToken = md5(random_bytes(32));
                $this->accessTokenService->insertAccessToken($accessToken, $user);
            }

            $headers['HTTP_x-access-token'] = $accessToken;

            $this->cache->save('unittest_headers', $headers);
        }

        return $headers;
    }
}