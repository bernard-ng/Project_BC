<?php

namespace ContainerARnjGHx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M1Vpu8ZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.m1Vpu8Z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.m1Vpu8Z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'announcementRepository' => ['privates', 'App\\Repository\\AnnouncementRepository', 'getAnnouncementRepositoryService', true],
        ], [
            'announcementRepository' => 'App\\Repository\\AnnouncementRepository',
        ]);
    }
}
