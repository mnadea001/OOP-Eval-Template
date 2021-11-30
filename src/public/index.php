<?php

declare(strict_types=1);

require __DIR__.'/../../vendor/autoload.php';

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

$router = new \App\Router();

$router->get('/', [App\Classes\Home::class, 'index']);
$router->get('/alt', [App\Classes\Home::class, 'alt']);
$router->get('/hw', function () { echo 'Hello world !'; });
$router->get('/transactions', [App\Classes\Transactions::class, 'index']);
$router->get('/transactions/create', [App\Classes\Transactions::class, 'create']);
$router->post('/transactions/create', [App\Classes\Transactions::class, 'store']);

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
// var_dump($router);