<?php
 namespace  app\controllers;

 use app\core\Application;
 use app\core\Controller;
 use app\core\Request;

 class siteController extends  Controller
 {
     public function home()
     {
         //return "show home age ";
         $param =
         [
                'name'=>"hospital home page"
         ];
         return  $this-> render('home',$param);
     }

     public function contact()
     {
         //return "show contact form";
         return  $this -> render('contact');
     }

     public function handleContact(Request $request)
     {
        $body = $request->postBody();

        echo "<pre>";
        var_dump($body);

         return "handling submitted data";
     }
 }