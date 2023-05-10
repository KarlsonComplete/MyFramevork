<?php

namespace application\core;

abstract class Controller
{
    public $route;

    public function __construct($route)
    {
        echo '<p>Я базовый контроллер</p>';

        $this->route = $route;
    }
}