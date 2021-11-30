<?php

    declare(strict_types=1);

namespace App;

class View
{
    public function __construct(protected string $view, protected array $params = [])
    {
    }

    public function render()
    {
        ob_start();

        include VIEWS_PATH.$this->view.'.php';

        return ob_get_clean();
    }
}