<?php


if($_SERVER["REQUEST_METHOD"]=="post")
{
    $usernam = $_POST['usernam'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '".$usernam."' AND pass = '".$password."'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);
}



if($row["Role"]=="user")
{
    header("location: booking.php");
}
elseif($row["Role"]=="Admin"){
    header("location: Admin.php");
    exit();
}

else{
    echo "username or password incorrect";
}


