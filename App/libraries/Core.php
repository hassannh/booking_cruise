<?php

//app core class
//creat url and loads core controller
//url format - ex /controller/method/params
// require_once "Controller.php";
// require_once "DB.php";

class Core{

    protected $currentController = 'pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->geturl();
        
        //look in controllers for first index
        if(isset($url))
        {

            if(file_exists('../App/controllers/' .ucwords($url[0]) . '.php')){
                //if file exists set as controller
                $this->currentController = ucwords($url[0]);
                //unset 0 index
                unset($url[0]);
            }else{
               // exit();
               echo 'controller not found' ;
            }
        //require the controller
        require_once '../App/controllers/'. $this->currentController . '.php';

        //instantiate controller class
        $this->currentController = new $this->currentController;
        }
        

        
echo $url[1];
        //check for second part of url
        if(isset($url[1])){
            //check to see if method exists in controller

            if(method_exists($this->currentController, $url[1]))
            {
                $this->currentMethod = $url[1];
                var_dump($this->currentMethod);
                unset($url[1]);
            }
//get params
$this->params = $url ? array_values($url) : [];
//call a callback with array of params


call_user_func_array([$this->currentController, $this->currentMethod] , $this->params);
        }
        
    }

    public function geturl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url= filter_var($url,FILTER_SANITIZE_URL);
            //break url string to an array
            $url = explode('/', $url);
            return $url;
        }
    }
}

?>