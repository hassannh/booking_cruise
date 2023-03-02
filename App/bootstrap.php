<?php

session_start();
require_once "config/config.php";
require_once "views/include/head.php";



//load config

 require_once "libraries/DB.php";
 require_once "libraries/Core.php";
 require_once "libraries/Controller.php";
// spl_autoload_register(function($classname){
//     require_once 'libraries/' . $classname .'.php';
// });

 require_once "helper/redirect.php";





$Core = new Core;


// $this->view('home');








?>