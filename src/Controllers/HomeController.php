<?php

    declare(strict_types=1);

namespace App\Controllers;

use App\Models\Container;

class HomeController
{
    public function index(): string
    {
        $containerManager = new Container();
        $containers = $containerManager->getContainers();

        return (new \App\View('index', ['containers' => $containers]))->render();
    }

    public function alt(): string
    {
        return strrev('This is an alternate universe');
    }
}