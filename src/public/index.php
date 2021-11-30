<?php

declare(strict_types=1);

require __DIR__.'/../../vendor/autoload.php';

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

$router = new \App\Router();

$router->register('/', [App\Classes\Home::class, 'index']);
$router->register('/alt', [App\Classes\Home::class, 'alt']);
$router->register('/hw', function () { require 'hello.php'; });
$router->register('/transactions', function () { echo 'Transactions'; });
$router->register('/transactions/create', [App\Classes\Transactions::class, 'create']);

echo $router->resolve($_SERVER['REQUEST_URI']);
// var_dump($router);