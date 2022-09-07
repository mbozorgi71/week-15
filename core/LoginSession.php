<?php

namespace app\core;

class LoginSession
{

    public function __construct($userName, $id)
    {

        session_start();

       $_SESSION['nuserName'] = $userName;
        $_SESSION['$id'] = $id;

    }
    public function deleteSession($userName)
    {
         unset($_SESSION['nuserName']);

    }
}