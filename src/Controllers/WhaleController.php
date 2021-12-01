<?php

    declare(strict_types=1);

namespace App\Controllers;

use App\View;

class WhaleController
{
    public function index(): string
    {
        $article = [
            'name' => 'Mon premier article',
            'content' => ' Le contenu de mon premier article',
            'date' => '01/12/2021',
        ];

        $amount = $_POST['amount'];

        return (new View('whale/index', ['article' => $article]))->render();
    }

    public function image(): string
    {
        return (new \App\View('whale/image'))->render();
    }

    public function container(): mixed
    {
        // Ici récupérer les infos

        // Passez les infos en paramètres du render

        return (new \App\View('whale/container'))->render();
    }
}