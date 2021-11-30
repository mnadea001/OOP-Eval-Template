<?php

    declare(strict_types=1);

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        // phpinfo();

        return 'This is the homepage !';
    }

    public function alt()
    {
        return strrev('This is an alternate universe');
    }
}