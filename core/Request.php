<?php
namespace app\core;

class Request
{
    public function getPath()
    {

        return  parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    }
    public function method()
    {
      return   strtolower($_SERVER["REQUEST_METHOD"]);
    }

    public function isGet()
    {
        return    $this -> method() === 'get';
    }

    public function isPost()
    {
        return    $this -> method() === 'post';
    }

    public function getBody()
    {
        $body = [];

        if($this ->method() == 'get')
        {
            foreach ($_GET as $key => $value)
            {
                $body[$key] = filter_input(INPUT_GET , $key ,FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $body;
    }


    public function postBody()
    {
        $body = [];

        if($this ->method() == 'post')
        {
            foreach ($_POST as $key => $value)
            {
                $body[$key] = filter_input(INPUT_POST , $key ,FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $body;
    }


}