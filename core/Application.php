<?php

namespace app\core;

//use app\core\Controller;

class Application
{
    public  static string $ROOT_DIR;
    public  static  Application $app;
    public Router $router;
    public Request $request;
    public Response $response;
    public  Controller $controller;
    public  DataBase $db;

    public function __construct($rootPath , $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
       $this-> request = new Request();
        $this-> response = new Response();
       $this-> router = new Router($this->request ,  $this-> response );
        $this -> db  = new DataBase($config['db']);
    }

    public function run()
    {
      echo  $this-> router -> resolve();
    }
}