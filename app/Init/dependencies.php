<?php

// DIC configuration
$container = $app->getContainer();

// view twig-view
$container['view'] = function (\Slim\Container $c) {
    $settings = $c->get('settings')['twig_view'];
    $view = new \Slim\Views\Twig($settings['template_path'], [
//        'cache' => $settings['cache']
        'cache' => false
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new \Slim\Views\TwigExtension($c['router'], $basePath));
    return $view;
};

// monolog
$container['logger'] = function (\Slim\Container $c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

/**
 * Illuminate\Database
 */
$capsule = new Illuminate\Database\Capsule\Manager;

$capsule->addConnection($container->get('settings')['database']);

$capsule->setAsGlobal();
// 启动Eloquent
//$capsule->bootEloquent();


