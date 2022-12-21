<?php

class userController extends Controller{
function __construct()
{
    $this->user = $this->model('user');
}

public function login(){

    

    if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $usernam = $_POST['username'];
    $password = $_POST['password'];
    $role = $this->user->dbform($usernam,$password);
    if($role=='Admin'){
        
    }else {
        die('errrr');
    }
}

}
}






