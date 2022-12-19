<?php
require_once "config/config.php";
require_once "views/include/head.php";

//load config
//load libraries
// require_once "libraries/Core.php";
// require_once "libraries/Controller.php";

// require_once "database/DB.php";

spl_autoload_register(function($classname){
    require_once 'libraries/' . $classname .'.php';
});





require_once "views/include/footer.php";



?>