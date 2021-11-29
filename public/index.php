<?php

    declare(strict_types=1);

    require '../src/Router.php';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

$router = new App\Router();

$router->register('/', function () {
    echo 'Homepage';
});

$router->register('/transactions', function () {
    echo 'Transaction page';
});