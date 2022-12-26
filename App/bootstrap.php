<?php
require_once "config/config.php";
require_once "views/include/head.php";
require_once "views/include/navbar.php";


//load config

//  require_once "libraries/DB.php";
//  require_once "libraries/Core.php";
 //require_once "libraries/Controller.php";

spl_autoload_register(function($classname){
    require_once 'libraries/' . $classname .'.php';
});
$Core = new Core;
require_once "views/include/footer.php";


?>