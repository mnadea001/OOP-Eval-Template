<?php

    declare(strict_types=1);

namespace App\Classes;

class Transactions
{
    public function index(): string
    {
        echo '<pre>';
        var_dump($_REQUEST);
        echo '</pre>';

        return '
        <form action="/transactions/create" method="post">
            <label>Amount</label>
            <input type="number"/>
            <input type="submit" value="envoyer"/>
        </form>
        ';
    }

    public function create(): string
    {
        $amount = $_POST['amount'];

        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        return $amount;
    }
}