<?php

namespace app\core;

class Controller
{
    public function render($view , $param =[])
    {
             return Application::$app -> router -> renderView($view , $param);
    }
}