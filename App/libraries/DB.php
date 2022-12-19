<?php


$host = 'localhost';
$user = 'root';
$password = '';
$database = 'booking_cruise';

session_start();


    $connect = mysqli_connect($host , $user, $password ,$database);
    if($connect === false){
        die( "Connection failed: ") . $e->getMessage();
}

// require_once "../controllers/userController";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $usernam = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '".$usernam."' AND password = '".$password."' limit 1" ;
    $result = mysqli_query($connect,$sql);

    $data = mysqli_fetch_array($result);

    $role = $data["Role"];
    if($role == "user") {
        $_SESSION["username"]=$username;
        header("location: booking.php");

    } else if($role == "Admin") {
        $_SESSION["username"]=$username;
        header("location: Admin.php");
        exit();

    } else{
        echo "username or password incorrect";
    }
}



