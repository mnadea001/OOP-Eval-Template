<?php

    declare(strict_types=1);

namespace App\Controllers;

use App\Models\Container;
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
        // Ici récupérer les infos
        $form_infos = [
            'name' => htmlspecialchars(trim($_POST['name'])),
            'server' => htmlspecialchars(ucfirst($_POST['server'])),
            'database' => htmlspecialchars(ucfirst($_POST['database'])),
            'language' => htmlspecialchars(ucfirst($_POST['language'])),
        ];

        // Execution de la méthode createContainer qui sert à créer des Containers à l'aide d'une requête SQL.
        $containerManager = new Container();
        $containerManager->createContainer($form_infos['name'], $form_infos['server'], $form_infos['database'], $form_infos['language']);
        // $containerManager->createContainer(...$form_infos);

        $containers = $containerManager->getContainers();
        // Passez les infos en paramètres du render
        return (new \App\View('whale/container', ['containers' => $containers]))->render();
    }
}