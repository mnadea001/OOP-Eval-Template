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

        return (new View('whale/index', ['article' => $article]))->render();
    }

    public function image(): string
    {
        return (new \App\View('whale/image'))->render();
    }

    public function container(): string
    {
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
        // Ici récupérer les infos
        $form_infos = [
            'name' => htmlspecialchars(trim($_POST['name'])),
            'server' => htmlspecialchars(ucfirst($_POST['server'])),
            'database' => htmlspecialchars(ucfirst($_POST['database'])),
            'language' => htmlspecialchars(ucfirst($_POST['language'])),
        ];

        $user = ['username' => 'Negi'];

        // Passez les infos en paramètres du render

        return (new \App\View('whale/container', [
            'form_infos' => $form_infos,
            'user' => $user,
            ]))->render();
    }
}