<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Http\Controllers;
use App\Http\Middleware;

/**
 * -----------------------------------
 * 路由闭包里面，以$this使用$app
 * -----------------------------------
 */

/**
 * 普通闭包路由
 */
$app->get('/Hello/your/[{name}]', function (Request $request, Response $response, $args) {
    $response->getBody()->write('Hello ' . $args['name']);
    return $response;
});


/**
 * 使用 控制器类
 */
$app->get('/hello[/{name}]', Controllers\ExampleController::class . ':Index')
    ->add(new Middleware\ExampleMiddleware());
