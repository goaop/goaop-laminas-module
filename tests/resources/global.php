<?php

return [
    \Go\Laminas\Framework\Module::CONFIG_KEY => require 'goaop_module.php',

    \Go\Laminas\Framework\Module::ASPECT_CONFIG_KEY => [
        \Go\Laminas\Framework\Tests\Aspect\TestAspect::class,
    ],

    'service_manager' => [
        'factories' => [
            \Go\Laminas\Framework\Tests\Aspect\TestAspect::class => \Laminas\ServiceManager\Factory\InvokableFactory::class,
        ],
    ],
];