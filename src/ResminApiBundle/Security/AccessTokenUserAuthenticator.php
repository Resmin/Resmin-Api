<?php

namespace ResminApiBundle\Security;

use ResminApiBundle\Service\AccessTokenService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\SimplePreAuthenticatorInterface;
use Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class AccessTokenUserAuthenticator implements SimplePreAuthenticatorInterface
{

    /**
     * @var AccessTokenService
     */
    private $accessTokenService;

    /**
     * AccessTokenUserAuthenticator constructor.
     * @param AccessTokenService $accessTokenService
     */
    public function __construct(AccessTokenService $accessTokenService)
    {
        $this->accessTokenService = $accessTokenService;
    }


    public function authenticateToken(TokenInterface $token, UserProviderInterface $userProvider, $providerKey)
    {
        $accessToken = $token->getCredentials();
        if (!$accessToken) {
            return $token;
        }

        $accessToken = $this->accessTokenService->getUserByAccessToken($accessToken);

        if ($accessToken === false) {
            throw new AuthenticationException('Hatalı bir kullanıcı kimliği belirtildi');
        }

        $username = $accessToken->getUsername();

        $user = $userProvider->loadUserByUsername($username);
        if (!$user instanceof UserInterface) {
            throw new AuthenticationException('Hatalı bir kullanıcı kimliği belirtildi');
        }

        return new PreAuthenticatedToken(
            $user,
            $accessToken,
            $providerKey,
            $user->getRoles()
        );
    }

    public function supportsToken(TokenInterface $token, $providerKey)
    {
        return $token instanceof PreAuthenticatedToken && ($token->getProviderKey() === $providerKey);
    }

    public function createToken(Request $request, $providerKey)
    {
        return new PreAuthenticatedToken(
            'anon.',
            $request->headers->get('x-access-token'),
            $providerKey
        );
    }


}