<?php

declare(strict_types=1);

require '../vendor/autoload.php';

spl_autoload_register(function ($class) {
    $class = '..'.substr(str_replace('\\', '/', $class), 3).'.php';

    if (!file_exists($class)) {
        require $class;
    }
});
    // require '../Router.php';
    // require '../PaymentGateway/Paypal/Transaction.php';

use App\PaymentGateway\Paypal\Transaction;
use App\Router;

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

$router = new Router();
$transaction = new Transaction(250, 'Transaction');

$router->register('/', function () {
    echo 'Homepage';
});

$router->register('/transactions', function () {
    echo 'Transaction page';
});