<?php

namespace ContainerOQKPTWT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UVA8kO1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UVA8kO1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UVA8kO1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AddressController::delete' => ['privates', '.service_locator.WTaB_Rv', 'get_ServiceLocator_WTaBRvService', true],
            'App\\Controller\\AddressController::edit' => ['privates', '.service_locator.WTaB_Rv', 'get_ServiceLocator_WTaBRvService', true],
            'App\\Controller\\AddressController::index' => ['privates', '.service_locator.H6ppJic', 'get_ServiceLocator_H6ppJicService', true],
            'App\\Controller\\AddressController::show' => ['privates', '.service_locator.WTaB_Rv', 'get_ServiceLocator_WTaBRvService', true],
            'App\\Controller\\Admin\\AnnouncementController::delete' => ['privates', '.service_locator.gcGfJ6K', 'get_ServiceLocator_GcGfJ6KService', true],
            'App\\Controller\\Admin\\AnnouncementController::edit' => ['privates', '.service_locator.gcGfJ6K', 'get_ServiceLocator_GcGfJ6KService', true],
            'App\\Controller\\Admin\\AnnouncementController::index' => ['privates', '.service_locator.m1Vpu8Z', 'get_ServiceLocator_M1Vpu8ZService', true],
            'App\\Controller\\Admin\\AnnouncementController::show' => ['privates', '.service_locator.gcGfJ6K', 'get_ServiceLocator_GcGfJ6KService', true],
            'App\\Controller\\Admin\\GarageController::delete' => ['privates', '.service_locator.RhCUUGL', 'get_ServiceLocator_RhCUUGLService', true],
            'App\\Controller\\Admin\\GarageController::edit' => ['privates', '.service_locator.RhCUUGL', 'get_ServiceLocator_RhCUUGLService', true],
            'App\\Controller\\Admin\\GarageController::index' => ['privates', '.service_locator.lKYwOcv', 'get_ServiceLocator_LKYwOcvService', true],
            'App\\Controller\\Admin\\GarageController::show' => ['privates', '.service_locator.RhCUUGL', 'get_ServiceLocator_RhCUUGLService', true],
            'App\\Controller\\Admin\\ProfessionnalController::delete' => ['privates', '.service_locator.NI.jnw2', 'get_ServiceLocator_NI_Jnw2Service', true],
            'App\\Controller\\Admin\\ProfessionnalController::edit' => ['privates', '.service_locator.NI.jnw2', 'get_ServiceLocator_NI_Jnw2Service', true],
            'App\\Controller\\Admin\\ProfessionnalController::index' => ['privates', '.service_locator.FhA5lhV', 'get_ServiceLocator_FhA5lhVService', true],
            'App\\Controller\\Admin\\ProfessionnalController::show' => ['privates', '.service_locator.NI.jnw2', 'get_ServiceLocator_NI_Jnw2Service', true],
            'App\\Controller\\AnnouncementController::delete' => ['privates', '.service_locator.gcGfJ6K', 'get_ServiceLocator_GcGfJ6KService', true],
            'App\\Controller\\AnnouncementController::edit' => ['privates', '.service_locator.gcGfJ6K', 'get_ServiceLocator_GcGfJ6KService', true],
            'App\\Controller\\AnnouncementController::index' => ['privates', '.service_locator.m1Vpu8Z', 'get_ServiceLocator_M1Vpu8ZService', true],
            'App\\Controller\\AnnouncementController::show' => ['privates', '.service_locator.gcGfJ6K', 'get_ServiceLocator_GcGfJ6KService', true],
            'App\\Controller\\GarageController::delete' => ['privates', '.service_locator.RhCUUGL', 'get_ServiceLocator_RhCUUGLService', true],
            'App\\Controller\\GarageController::edit' => ['privates', '.service_locator.RhCUUGL', 'get_ServiceLocator_RhCUUGLService', true],
            'App\\Controller\\GarageController::index' => ['privates', '.service_locator.lKYwOcv', 'get_ServiceLocator_LKYwOcvService', true],
            'App\\Controller\\GarageController::show' => ['privates', '.service_locator.RhCUUGL', 'get_ServiceLocator_RhCUUGLService', true],
            'App\\Controller\\ProfessionnalController::delete' => ['privates', '.service_locator.NI.jnw2', 'get_ServiceLocator_NI_Jnw2Service', true],
            'App\\Controller\\ProfessionnalController::edit' => ['privates', '.service_locator.NI.jnw2', 'get_ServiceLocator_NI_Jnw2Service', true],
            'App\\Controller\\ProfessionnalController::index' => ['privates', '.service_locator.FhA5lhV', 'get_ServiceLocator_FhA5lhVService', true],
            'App\\Controller\\ProfessionnalController::show' => ['privates', '.service_locator.NI.jnw2', 'get_ServiceLocator_NI_Jnw2Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YT8XVZ7', 'get_ServiceLocator_YT8XVZ7Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AddressController:delete' => ['privates', '.service_locator.WTaB_Rv', 'get_ServiceLocator_WTaBRvService', true],
            'App\\Controller\\AddressController:edit' => ['privates', '.service_locator.WTaB_Rv', 'get_ServiceLocator_WTaBRvService', true],
            'App\\Controller\\AddressController:index' => ['privates', '.service_locator.H6ppJic', 'get_ServiceLocator_H6ppJicService', true],
            'App\\Controller\\AddressController:show' => ['privates', '.service_locator.WTaB_Rv', 'get_ServiceLocator_WTaBRvService', true],
            'App\\Controller\\Admin\\AnnouncementController:delete' => ['privates', '.service_locator.gcGfJ6K', 'get_ServiceLocator_GcGfJ6KService', true],
            'App\\Controller\\Admin\\AnnouncementController:edit' => ['privates', '.service_locator.gcGfJ6K', 'get_ServiceLocator_GcGfJ6KService', true],
            'App\\Controller\\Admin\\AnnouncementController:index' => ['privates', '.service_locator.m1Vpu8Z', 'get_ServiceLocator_M1Vpu8ZService', true],
            'App\\Controller\\Admin\\AnnouncementController:show' => ['privates', '.service_locator.gcGfJ6K', 'get_ServiceLocator_GcGfJ6KService', true],
            'App\\Controller\\Admin\\GarageController:delete' => ['privates', '.service_locator.RhCUUGL', 'get_ServiceLocator_RhCUUGLService', true],
            'App\\Controller\\Admin\\GarageController:edit' => ['privates', '.service_locator.RhCUUGL', 'get_ServiceLocator_RhCUUGLService', true],
            'App\\Controller\\Admin\\GarageController:index' => ['privates', '.service_locator.lKYwOcv', 'get_ServiceLocator_LKYwOcvService', true],
            'App\\Controller\\Admin\\GarageController:show' => ['privates', '.service_locator.RhCUUGL', 'get_ServiceLocator_RhCUUGLService', true],
            'App\\Controller\\Admin\\ProfessionnalController:delete' => ['privates', '.service_locator.NI.jnw2', 'get_ServiceLocator_NI_Jnw2Service', true],
            'App\\Controller\\Admin\\ProfessionnalController:edit' => ['privates', '.service_locator.NI.jnw2', 'get_ServiceLocator_NI_Jnw2Service', true],
            'App\\Controller\\Admin\\ProfessionnalController:index' => ['privates', '.service_locator.FhA5lhV', 'get_ServiceLocator_FhA5lhVService', true],
            'App\\Controller\\Admin\\ProfessionnalController:show' => ['privates', '.service_locator.NI.jnw2', 'get_ServiceLocator_NI_Jnw2Service', true],
            'App\\Controller\\AnnouncementController:delete' => ['privates', '.service_locator.gcGfJ6K', 'get_ServiceLocator_GcGfJ6KService', true],
            'App\\Controller\\AnnouncementController:edit' => ['privates', '.service_locator.gcGfJ6K', 'get_ServiceLocator_GcGfJ6KService', true],
            'App\\Controller\\AnnouncementController:index' => ['privates', '.service_locator.m1Vpu8Z', 'get_ServiceLocator_M1Vpu8ZService', true],
            'App\\Controller\\AnnouncementController:show' => ['privates', '.service_locator.gcGfJ6K', 'get_ServiceLocator_GcGfJ6KService', true],
            'App\\Controller\\GarageController:delete' => ['privates', '.service_locator.RhCUUGL', 'get_ServiceLocator_RhCUUGLService', true],
            'App\\Controller\\GarageController:edit' => ['privates', '.service_locator.RhCUUGL', 'get_ServiceLocator_RhCUUGLService', true],
            'App\\Controller\\GarageController:index' => ['privates', '.service_locator.lKYwOcv', 'get_ServiceLocator_LKYwOcvService', true],
            'App\\Controller\\GarageController:show' => ['privates', '.service_locator.RhCUUGL', 'get_ServiceLocator_RhCUUGLService', true],
            'App\\Controller\\ProfessionnalController:delete' => ['privates', '.service_locator.NI.jnw2', 'get_ServiceLocator_NI_Jnw2Service', true],
            'App\\Controller\\ProfessionnalController:edit' => ['privates', '.service_locator.NI.jnw2', 'get_ServiceLocator_NI_Jnw2Service', true],
            'App\\Controller\\ProfessionnalController:index' => ['privates', '.service_locator.FhA5lhV', 'get_ServiceLocator_FhA5lhVService', true],
            'App\\Controller\\ProfessionnalController:show' => ['privates', '.service_locator.NI.jnw2', 'get_ServiceLocator_NI_Jnw2Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YT8XVZ7', 'get_ServiceLocator_YT8XVZ7Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AddressController::delete' => '?',
            'App\\Controller\\AddressController::edit' => '?',
            'App\\Controller\\AddressController::index' => '?',
            'App\\Controller\\AddressController::show' => '?',
            'App\\Controller\\Admin\\AnnouncementController::delete' => '?',
            'App\\Controller\\Admin\\AnnouncementController::edit' => '?',
            'App\\Controller\\Admin\\AnnouncementController::index' => '?',
            'App\\Controller\\Admin\\AnnouncementController::show' => '?',
            'App\\Controller\\Admin\\GarageController::delete' => '?',
            'App\\Controller\\Admin\\GarageController::edit' => '?',
            'App\\Controller\\Admin\\GarageController::index' => '?',
            'App\\Controller\\Admin\\GarageController::show' => '?',
            'App\\Controller\\Admin\\ProfessionnalController::delete' => '?',
            'App\\Controller\\Admin\\ProfessionnalController::edit' => '?',
            'App\\Controller\\Admin\\ProfessionnalController::index' => '?',
            'App\\Controller\\Admin\\ProfessionnalController::show' => '?',
            'App\\Controller\\AnnouncementController::delete' => '?',
            'App\\Controller\\AnnouncementController::edit' => '?',
            'App\\Controller\\AnnouncementController::index' => '?',
            'App\\Controller\\AnnouncementController::show' => '?',
            'App\\Controller\\GarageController::delete' => '?',
            'App\\Controller\\GarageController::edit' => '?',
            'App\\Controller\\GarageController::index' => '?',
            'App\\Controller\\GarageController::show' => '?',
            'App\\Controller\\ProfessionnalController::delete' => '?',
            'App\\Controller\\ProfessionnalController::edit' => '?',
            'App\\Controller\\ProfessionnalController::index' => '?',
            'App\\Controller\\ProfessionnalController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AddressController:delete' => '?',
            'App\\Controller\\AddressController:edit' => '?',
            'App\\Controller\\AddressController:index' => '?',
            'App\\Controller\\AddressController:show' => '?',
            'App\\Controller\\Admin\\AnnouncementController:delete' => '?',
            'App\\Controller\\Admin\\AnnouncementController:edit' => '?',
            'App\\Controller\\Admin\\AnnouncementController:index' => '?',
            'App\\Controller\\Admin\\AnnouncementController:show' => '?',
            'App\\Controller\\Admin\\GarageController:delete' => '?',
            'App\\Controller\\Admin\\GarageController:edit' => '?',
            'App\\Controller\\Admin\\GarageController:index' => '?',
            'App\\Controller\\Admin\\GarageController:show' => '?',
            'App\\Controller\\Admin\\ProfessionnalController:delete' => '?',
            'App\\Controller\\Admin\\ProfessionnalController:edit' => '?',
            'App\\Controller\\Admin\\ProfessionnalController:index' => '?',
            'App\\Controller\\Admin\\ProfessionnalController:show' => '?',
            'App\\Controller\\AnnouncementController:delete' => '?',
            'App\\Controller\\AnnouncementController:edit' => '?',
            'App\\Controller\\AnnouncementController:index' => '?',
            'App\\Controller\\AnnouncementController:show' => '?',
            'App\\Controller\\GarageController:delete' => '?',
            'App\\Controller\\GarageController:edit' => '?',
            'App\\Controller\\GarageController:index' => '?',
            'App\\Controller\\GarageController:show' => '?',
            'App\\Controller\\ProfessionnalController:delete' => '?',
            'App\\Controller\\ProfessionnalController:edit' => '?',
            'App\\Controller\\ProfessionnalController:index' => '?',
            'App\\Controller\\ProfessionnalController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
