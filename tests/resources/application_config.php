<?php

$modules = [
    'Go\Laminas\Framework',
];

if (class_exists('Laminas\Router\Module')) {
    $modules[] = 'Laminas\Router';
}

return [
    'modules' => $modules,
    'module_listener_options' => [
        'module_paths' => [
            __DIR__ . '/../../vendor',
        ],

        'config_glob_paths' => [
            __DIR__ . '/{{,*.}global,{,*.}local}.php',
        ],
    ]
];
