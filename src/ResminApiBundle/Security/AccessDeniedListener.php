<?php

namespace ResminApiBundle\Security;

use Psr\Log\LoggerInterface;
use ResminApiBundle\Utility\StringUtils;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\EventListener\ExceptionListener as ExceptionListener;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Security\Core\Exception\InsufficientAuthenticationException;

class AccessDeniedListener extends ExceptionListener
{
    public function __construct($controller, LoggerInterface $logger = null)
    {
        parent::__construct($controller, $logger);
    }

    /**
     * @param GetResponseForExceptionEvent $event
     * @return bool|void
     */
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        static $handling;

        if (true === $handling) {
            return false;
        }

        $handling = true;

        $exception = $event->getException();

        if ($exception instanceof AccessDeniedHttpException) {
            if (StringUtils::startsWith($exception->getMessage(), 'Expression "has_role(\'ROLE_')) {
                $message = 'Bu alana erişebilmek için kullanıcı girişi yapılmalıdır';
                $statusCode = 401;
            } else {
                $message = $exception->getMessage();
                $statusCode = $exception->getStatusCode();
            }

            $exception = new HttpException(
                $statusCode,
                $message,
                $exception
            );

            $event->setException($exception);
            parent::onKernelException($event);
        } elseif ($exception instanceof InsufficientAuthenticationException) {
            $exception = new AccessDeniedHttpException(
                'Bu alana erişebilmek için geçerli bir kullanıcı kimliği belirtilmelidir',
                $exception
            );

            $event->setException($exception);
            parent::onKernelException($event);
        }

        $handling = false;

        return false;
    }

}
