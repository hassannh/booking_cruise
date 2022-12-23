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
        die('welcome Admin');
    }else {
        die('welcome user');
    }
}

}


public function signUp(){

    if(isset($_POST['submit'])){
       $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
       $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
       $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);

       $errors=[];
       //validate the name
       if(empty($name)){
        $errors[]="you should type the name";
       }elseif(strlen($name)>100){
        $errors[]="name must be < 100";
       }
       if(empty($errors)){
        echo "insert db";
       }
       //validate the email
       if(empty($email)){
        $errors[]="you should type email";
       }elseif (filter_var($email,FILTER_SANITIZE_EMAIL)==false){
        $errors[]="invalid email";
       }

          //validate the password
          if(empty($password)){
            $errors[]="you should type your password";
           }elseif(strlen($password) < 6){

            $errors[] = "password must be > 6";
           }



           //insert or error
           if(empty($errors)){
            echo "insert db";
           }else{
            var_dump($errors);
           }
       }

    }

}









