<?php

namespace App\Exceptions;

class ViewNotFoundException extends \Exception
{
    protected $message = 'Can\'t render view, file does not exist';
}