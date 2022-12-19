<?php

//app core class
//creat url and loads core controller
//url format - ex /controller/method/params

class Core{

    protected $currentController = 'pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        $this->geturl();
    }

    public function geturl(){
        if(isset($_GET['url'])){

            $url = rtrim($_GET['url'], '/');
        }
    }
}



?>