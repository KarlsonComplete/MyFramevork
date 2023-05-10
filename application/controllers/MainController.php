<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction(){
        echo 'Добро пожаловать в MyFramework';
    }

    public function contactAction(){
        echo 'Страница с контактами';
    }

}