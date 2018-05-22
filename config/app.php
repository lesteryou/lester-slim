<?php

/**
 * Database setting
 */
$database = require_once __DIR__ . '/database.php';

return [
    'settings' => [
        //Base settings
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../resources/views/',
        ],

        // twig-view settings
        'twig_view' => [
            'template_path' => __DIR__ . '/../resources/views/',
            'cache' => __DIR__ . '/../data/cache/views/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../data/logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        //Illuminate\database settings
        'database' =>$database,

    ],
];
