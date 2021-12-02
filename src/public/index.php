<?php

declare(strict_types=1);

use App\Exceptions\RouteNotFoundException;
use App\View;

require __DIR__.'/../../vendor/autoload.php';

$root = dirname(__DIR__).DIRECTORY_SEPARATOR;
define('VIEWS_PATH', $root.'../views'.DIRECTORY_SEPARATOR);

session_start();
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';
try {
    $router = new \App\Router();

    $router->get('/', [App\Controllers\HomeController::class, 'index']);
    $router->get('/alt', [App\Controllers\HomeController::class, 'alt']);
    $router->get('/hw', function () { echo 'Hello world !'; });
    $router->get('/transactions', [App\Controllers\TransactionsController::class, 'index']);
    $router->get('/transactions/create', [App\Controllers\TransactionsController::class, 'create']);
    $router->post('/transactions/create', [App\Controllers\TransactionsController::class, 'store']);
    $router->get('/whale', [App\Controllers\WhaleController::class, 'index']);
    $router->get('/whale/image', [App\Controllers\WhaleController::class, 'image']);
    $router->post('/whale/container', [App\Controllers\WhaleController::class, 'container']);
    $router->get('/voitures', [App\Controllers\HomeController::class, 'voiture']);
    $router->get('/voitures/create', [App\Controllers\HomeController::class, 'create']);
    $router->post('/voitures/create', [App\Controllers\HomeController::class, 'store']);

    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
} catch (\App\Exceptions\RouteNotFoundException $e) {
    // throw new RouteNotFoundException();

    //? Forgot to add that sh*t
    http_response_code(404);

    $error = $e->getMessage();

    echo (new View('error/404', ['error' => $error]))->render();
}

// var_dump($router);