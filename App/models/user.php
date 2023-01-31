<?php
// require_once '../libraries/DB.php';

class user{

private $database;
public function __construct()
{
    $this->database = new DB;
}

//find user by email
public function getUserByEmail($email)
{
    $this->database->query("SELECT * FROM users WHERE Email=:email");
    $this->database->bind(":email",$email);
    $this->database->execute(); 
    $fetch = $this->database->fetch();

    if($this->database->rowCount() > 0){
        return true;
    }else{
        return false;
    }

}


public function register($data){
    $this->database->query('INSERT INTO users (name, email, password)VALUES (:name, :email, :password)');

    // Bind values
    $this->database->bind(':name', $data['name']);

    $this->database->bind(':email', $data['email']);
    $this->database->bind(':password', $data['password']);

    // Execute
    if($this->database->execute()){
        return true;
    } else{
        return false;
    }

}



public function login($email, $password){
    $this->database->query('SELECT * FROM users WHERE email = :email');
    $this->database->bind(':email', $email);

    $result = $this->database->fetch();

    $hashed_password = $result->password;

    if(password_verify($password, $hashed_password)){
        return $result;
    } else{
        return false;
    }
}


}
