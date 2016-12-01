<?php

define('__APP_ROOT__', dirname(__DIR__));

require __APP_ROOT__ . '/vendor/autoload.php';

use Hero\Router;

$router = new Router();

$router
    ->on('GET', 'path/to/action', function () {
        return 'this is a hero return';
    })
    ->post('/(\w+)/(\w+)/(\w+)', function ($module, $class, $method) {
        var_dump([$module, $class, $method]);
    })
    ->get('/(.*)', function ($uri) {
        var_dump($uri);
    });

echo $router($router->method(), $router->uri());