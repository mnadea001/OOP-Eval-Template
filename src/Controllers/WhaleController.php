<?php

    declare(strict_types=1);

namespace App\Controllers;

use App\View;

class WhaleController
{
    public function index(): string
    {
        return (new View('whale/index'))->render();
    }

    public function image(): string
    {
        return (new \App\View('whale/image'))->render();
    }

    public function container(): mixed
    {
        // return var_dump($_POST);
        return (new \App\View('whale/container'))->render();
    }
}