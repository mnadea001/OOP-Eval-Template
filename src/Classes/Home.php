<?php

    declare(strict_types=1);

namespace App\Classes;

class Home
{
    public function index()
    {
        return 'This is the homepage !';
    }

    public function alt()
    {
        return strrev('This is an alternate universe');
    }
}