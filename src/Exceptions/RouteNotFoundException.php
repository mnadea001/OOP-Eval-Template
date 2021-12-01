<?php

namespace App\Exceptions;

class RouteNotFoundException extends \Exception
{
    protected $message = 'Page couldn\'t be found';
}