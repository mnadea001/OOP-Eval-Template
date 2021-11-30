<?php

declare(strict_types=1);

require __DIR__.'/../../vendor/autoload.php';

session_start();
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

$router = new \App\Router();

$router->get('/', [App\Controllers\HomeController::class, 'index']);
$router->get('/alt', [App\Controllers\HomeController::class, 'alt']);
$router->get('/hw', function () { echo 'Hello world !'; });
$router->get('/transactions', [App\Controllers\TransactionsController::class, 'index']);
$router->get('/transactions/create', [App\Controllers\TransactionsController::class, 'create']);
$router->post('/transactions/create', [App\Controllers\TransactionsController::class, 'store']);

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));

// var_dump($router);