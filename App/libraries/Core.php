<?php

//app core class
//creat url and loads core controller
//url format - ex /controller/method/params

class Core{

    protected $currentController = 'pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        // print_r($this->geturl());
        $url = $this->geturl();
        //look in controllers for first index
        if(file_exists('../App/controllers/' .ucwords($url[0]) . '.php')){

            //if file exists set as controller
            $this->currentController = ucwords($url[0]);
            //unset 0 index
            unset($url[0]);
        }

        //require the controller
        require_once '../App/controllers/'. $this->currentController . '.php';

        //instantiate controller class
        $this->currentController = new $this->currentController;
    }

    public function geturl(){
        if(isset($_GET['url'])){

            $url = rtrim($_GET['url'], '/');
            $url= filter_var($url,FILTER_SANITIZE_URL);
            //put url in array
            $url = explode('/', $url);
            return $url;
        }
    }
}



?>