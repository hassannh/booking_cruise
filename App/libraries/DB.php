<?php


//PDO database
//connect to database
//creat prepared statments
//bind values
//return rows and results

class DB {
    private static ?\PDO $instance = null;
    
    
    public static function connection()
    {
        $host = DB_HOST;
        $user = DB_USER;
        $pass = DB_PASS;
        $dbname = DB_NAME;
        //set DSN
        $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
        
        if (self::$instance == null) {
            try{
                self::$instance = new PDO($dsn,$user, $pass);
                self::$instance->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->query('SET NAMES utf8');
				self::$instance->query('SET CHARACTER SET utf8');
            }catch(PDOException $e){
                echo 'failed' . $e->getMessage();
            }
        } 
        return self::$instance;
        
    }

}










// $host = 'localhost';
// $user = 'root';
// $password = '';
// $database = 'booking_cruise';

// session_start();


//     $connect = mysqli_connect($host , $user, $password ,$database);
//     if($connect === false){
//         die( "Connection failed: ") . $e->getMessage();
// }

// // require_once "../controllers/userController";

// // if($_SERVER["REQUEST_METHOD"]=="POST")
// // {
// //     $usernam = $_POST['username'];
// //     $password = $_POST['password'];

// //     $sql = "SELECT * FROM users WHERE username = '".$usernam."' AND password = '".$password."' limit 1" ;
// //     $result = mysqli_query($connect,$sql);

// //     $data = mysqli_fetch_array($result);

// //     $role = $data["Role"];
// //     if($role == "user") {
// //         $_SESSION["username"]=$username;
// //         header("location: booking.php");

// //     } else if($role == "Admin") {
// //         $_SESSION["username"]=$username;
// //         header("location: Admin.php");
// //         exit();

// //     } else{
// //         echo "username or password incorrect";
// //     }
// // }



