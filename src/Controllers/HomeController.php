<?php

    declare(strict_types=1);

namespace App\Controllers;

use App\Models\Container;
use App\Models\Voiture;

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

    public function voiture(): string
    {
        $carManager = new Voiture();

        $cars = $carManager->getCars();

        return (new \App\View('voiture/index', ['cars' => $cars]))->render();
    }

    public function create(): string
    {
        $carManager = new Voiture();

        $car_form = [
            'brand' => htmlspecialchars(trim($_POST['brand'])),
            'color' => htmlspecialchars(trim($_POST['color'])),
            'year' => intval(htmlspecialchars($_POST['year'])),
            'fuel' => htmlspecialchars(trim($_POST['fuel'])),
            'auto' => (bool) htmlspecialchars(($_POST['auto'])),
        ];

        $result = $carManager->createCar(...$car_form);

        return (new \App\View('voiture/create', ['result' => $result]))->render();
    }
}