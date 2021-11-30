<?php

    declare(strict_types=1);

namespace App\Controllers;

use App\View;

class TransactionsController
{
    public function index(): string
    {
        //? Grâce au session_start() présent dans public/index.php j'ai accès aux variables de session depuis tout mon projet.
        // echo '<pre>';
        // var_dump($_SESSION);
        // echo '</pre>';

        // $_SESSION['count'] = 0;

        // echo 'count as been resetted';

        //? Définir les cookies avec setcookie(), ils sont stockés localement.
        // setcookie(
        //     'username', 'Negi', time() + (24 * 60 * 60)
        //     //* nom du cookie, valeur du cookie, expiration, chemin de stockage, nom de domaine, secure, http-only
        // );

        // echo '<pre>';
        // var_dump($_COOKIE);
        // echo '</pre>';

        return (new View('transactions/index'))->render();
    }

    public function create(): string
    {
        return 'ok';
    }

    public function store(): void
    {
        $amount = $_POST['amount'];
        ++$_SESSION['count'];

        echo '<pre>';
        var_dump($amount);
        echo '</pre>';

        return;
    }
}