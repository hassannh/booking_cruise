<?php

if (isset($_POST['username'])) {

    $uname = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from Loginform where user='" . $uname . "'AND Pass='" . $password . "'
    Limit 1";

    $result = mysql_query($sql);

    if (mysql_num_rows($result) == 1) {

        echo " You Have Successfully Logged in";
        exit();
    } else {
        echo " You are not logged";
        exit();
    }
}

?>




<form class="login" action="*" method="POST">
    <label for="user">Username</label>
    <input type="text" name="user" autocomplete="off">
    <label for="pass">Password</label>
    <input type="password" name="pass" autocomplete="new-password">
    <input type="submit" value="log in" class="btn btn-primary submit">
</form>