<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ff8e0515f9b65ecd4726e9bda19fcfc
{
    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'DbGenerator\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'C' => 
        array (
            'CasasoftThumb\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
            'CasasoftStandards\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
            'CasasoftMessenger\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
            'CasasoftHelpers\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
            'CasasoftGeo\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
            'CasasoftEmail\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
            'CasasoftAuth\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            )
        ),
    );

    public static $classMap = array (
        'CasasoftAuth\\Controller\\UserController' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/Controller/UserController.php',
        'CasasoftAuth\\Controller\\UserControllerFactory' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/Controller/UserControllerFactory.php',
        'CasasoftAuth\\Form\\UserFieldset' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/Form/UserFieldset.php',
        'CasasoftAuth\\Form\\UserForgotPasswordForm' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/Form/UserForgotPasswordForm.php',
        'CasasoftAuth\\Form\\UserLoginForm' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/Form/UserLoginForm.php',
        'CasasoftAuth\\Form\\UserProfileForm' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/Form/UserProfileForm.php',
        'CasasoftAuth\\Form\\UserRegisterForm' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/Form/UserRegisterForm.php',
        'CasasoftAuth\\Module' => __DIR__ . '/../..' . '/src/CasasoftAuth/Module.php',
        'CasasoftAuth\\Service\\AclService' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/Service/AclService.php',
        'CasasoftAuth\\Service\\AclServiceFactory' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/Service/AclServiceFactory.php',
        'CasasoftAuth\\Service\\AuthService' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/Service/AuthService.php',
        'CasasoftAuth\\Service\\AuthServiceFactory' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/Service/AuthServiceFactory.php',
        'CasasoftAuth\\View\\Helper\\AuthAclAllowed' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/View/Helper/AuthAclAllowed.php',
        'CasasoftAuth\\View\\Helper\\AuthAclAllowedFactory' => __DIR__ . '/../..' . '/src/CasasoftAuth/src/CasasoftAuth/View/Helper/AuthAclAllowedFactory.php',
        'CasasoftEmail\\Module' => __DIR__ . '/../..' . '/src/CasasoftEmail/Module.php',
        'CasasoftEmail\\Service\\EmailService' => __DIR__ . '/../..' . '/src/CasasoftEmail/src/CasasoftEmail/Service/EmailService.php',
        'CasasoftEmail\\Service\\EmailServiceFactory' => __DIR__ . '/../..' . '/src/CasasoftEmail/src/CasasoftEmail/Service/EmailServiceFactory.php',
        'CasasoftGeo\\Module' => __DIR__ . '/../..' . '/src/CasasoftGeo/Module.php',
        'CasasoftGeo\\Service\\GeoService' => __DIR__ . '/../..' . '/src/CasasoftGeo/src/CasasoftGeo/Service/GeoService.php',
        'CasasoftGeo\\Service\\GeoServiceFactory' => __DIR__ . '/../..' . '/src/CasasoftGeo/src/CasasoftGeo/Service/GeoServiceFactory.php',
        'CasasoftHelpers\\Module' => __DIR__ . '/../..' . '/src/CasasoftHelpers/Module.php',
        'CasasoftHelpers\\View\\Helper\\PaginateMe' => __DIR__ . '/../..' . '/src/CasasoftHelpers/src/CasasoftHelpers/View/Helper/PaginateMe.php',
        'CasasoftHelpers\\View\\Helper\\PaginateMeFactory' => __DIR__ . '/../..' . '/src/CasasoftHelpers/src/CasasoftHelpers/View/Helper/PaginateMeFactory.php',
        'CasasoftHelpers\\View\\Helper\\Relativedate' => __DIR__ . '/../..' . '/src/CasasoftHelpers/src/CasasoftHelpers/View/Helper/Relativedate.php',
        'CasasoftHelpers\\View\\Helper\\RelativedateFactory' => __DIR__ . '/../..' . '/src/CasasoftHelpers/src/CasasoftHelpers/View/Helper/RelativedateFactory.php',
        'CasasoftMessenger\\Module' => __DIR__ . '/../..' . '/src/CasasoftMessenger/Module.php',
        'CasasoftMessenger\\Service\\Message' => __DIR__ . '/../..' . '/src/CasasoftMessenger/src/CasasoftMessenger/Service/Message.php',
        'CasasoftMessenger\\Service\\MessengerService' => __DIR__ . '/../..' . '/src/CasasoftMessenger/src/CasasoftMessenger/Service/MessengerService.php',
        'CasasoftMessenger\\Service\\MessengerServiceFactory' => __DIR__ . '/../..' . '/src/CasasoftMessenger/src/CasasoftMessenger/Service/MessengerServiceFactory.php',
        'CasasoftStandards\\Module' => __DIR__ . '/../..' . '/src/CasasoftStandards/Module.php',
        'CasasoftStandards\\Service\\Category' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/Category.php',
        'CasasoftStandards\\Service\\CategoryService' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/CategoryService.php',
        'CasasoftStandards\\Service\\CategoryServiceFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/CategoryServiceFactory.php',
        'CasasoftStandards\\Service\\ConversionService' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/ConversionService.php',
        'CasasoftStandards\\Service\\ConversionServiceFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/ConversionServiceFactory.php',
        'CasasoftStandards\\Service\\Feature' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/Feature.php',
        'CasasoftStandards\\Service\\FeatureService' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/FeatureService.php',
        'CasasoftStandards\\Service\\FeatureServiceFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/FeatureServiceFactory.php',
        'CasasoftStandards\\Service\\IntegratedOffer' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/IntegratedOffer.php',
        'CasasoftStandards\\Service\\IntegratedOfferService' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/IntegratedOfferService.php',
        'CasasoftStandards\\Service\\IntegratedOfferServiceFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/IntegratedOfferServiceFactory.php',
        'CasasoftStandards\\Service\\Numval' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/Numval.php',
        'CasasoftStandards\\Service\\NumvalService' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/NumvalService.php',
        'CasasoftStandards\\Service\\NumvalServiceFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/NumvalServiceFactory.php',
        'CasasoftStandards\\Service\\Utility' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/Utility.php',
        'CasasoftStandards\\Service\\UtilityService' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/UtilityService.php',
        'CasasoftStandards\\Service\\UtilityServiceFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/Service/UtilityServiceFactory.php',
        'CasasoftStandards\\View\\Helper\\Category' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/Category.php',
        'CasasoftStandards\\View\\Helper\\CategoryFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/CategoryFactory.php',
        'CasasoftStandards\\View\\Helper\\Feature' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/Feature.php',
        'CasasoftStandards\\View\\Helper\\FeatureFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/FeatureFactory.php',
        'CasasoftStandards\\View\\Helper\\GetList' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/GetList.php',
        'CasasoftStandards\\View\\Helper\\GetListFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/GetListFactory.php',
        'CasasoftStandards\\View\\Helper\\Label' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/Label.php',
        'CasasoftStandards\\View\\Helper\\LabelFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/LabelFactory.php',
        'CasasoftStandards\\View\\Helper\\Numval' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/Numval.php',
        'CasasoftStandards\\View\\Helper\\NumvalFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/NumvalFactory.php',
        'CasasoftStandards\\View\\Helper\\Utility' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/Utility.php',
        'CasasoftStandards\\View\\Helper\\UtilityFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/UtilityFactory.php',
        'CasasoftStandards\\View\\Helper\\Value' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/Value.php',
        'CasasoftStandards\\View\\Helper\\ValueFactory' => __DIR__ . '/../..' . '/src/CasasoftStandards/src/CasasoftStandards/View/Helper/ValueFactory.php',
        'CasasoftThumb\\Module' => __DIR__ . '/../..' . '/src/CasasoftThumb/Module.php',
        'CasasoftThumb\\Service\\ThumbService' => __DIR__ . '/../..' . '/src/CasasoftThumb/src/CasasoftThumb/Service/ThumbService.php',
        'CasasoftThumb\\Service\\ThumbServiceFactory' => __DIR__ . '/../..' . '/src/CasasoftThumb/src/CasasoftThumb/Service/ThumbServiceFactory.php',
        'CasasoftThumb\\View\\Helper\\Thumb' => __DIR__ . '/../..' . '/src/CasasoftThumb/src/CasasoftThumb/View/Helper/Thumb.php',
        'CasasoftThumb\\View\\Helper\\ThumbFactory' => __DIR__ . '/../..' . '/src/CasasoftThumb/src/CasasoftThumb/View/Helper/ThumbFactory.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit7ff8e0515f9b65ecd4726e9bda19fcfc::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7ff8e0515f9b65ecd4726e9bda19fcfc::$classMap;

        }, null, ClassLoader::class);
    }
}
