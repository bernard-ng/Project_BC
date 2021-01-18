<?php

namespace ContainerOQKPTWT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RhCUUGLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RhCUUGL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RhCUUGL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'garage' => ['privates', '.errored..service_locator.RhCUUGL.App\\Entity\\Garage', NULL, 'Cannot autowire service ".service_locator.RhCUUGL": it references class "App\\Entity\\Garage" but no such service exists.'],
        ], [
            'garage' => 'App\\Entity\\Garage',
        ]);
    }
}
