<?php

    declare(strict_types=1);

namespace App\Classes;

class Transactions
{
    public function index(): string
    {
        //? Grâce au session_start() présent dans public/index.php j'ai accès aux variables de session depuis tout mon projet.
        // echo '<pre>';
        // var_dump($_SESSION);
        // echo '</pre>';

        // $_SESSION['count'] = 0;

        // echo 'count as been resetted';

        setcookie(
            'username', 'Negi', time() + 10
            //* nom du cookie, valeur du cookie, expiration, chemin de stockage, nom de domaine, secure, http-only
        );

        echo '<pre>';
        var_dump($_COOKIE);
        echo '</pre>';

        return 'ok';
    }

    public function create(): string
    {
        return '
        <form action="" method="post">
            <label>Amount</label>
            <input type="number" name="amount"/>
            <input type="submit" value="envoyer"/>
        </form>
        ';
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