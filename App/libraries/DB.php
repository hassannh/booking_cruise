<?php


//PDO database
//connect to database
//creat prepared statments
//bind values
//return rows and results

class DB {
    private static ?\PDO $instance = null;
    
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASS;
    private $dbname = DB_NAME;

    private $pdo;
    private $stmt;
    
    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        try{
            $this->pdo = new PDO($dsn,$this->user,$this->password);
        }catch(PDOException $e){
            die("there is an issue: " . $e->getMessage());
        }
    }

    public function __destruct()
    {
        if ($this->stmt != null){
            $this->stmt = null;
        }
        if ($this->pdo != null){
            $this->pdo = null;
        }
    }

    public function query($sql)
    {
        $this->stmt->pdo->prepare($sql);
    }

    public function bind($param, $value, $type=null)
    {
        if(is_null($type))
        {
            switch(true)
            {
                case is_int($value);
                $type = pdo::PARAM_INT;
                break;

                case is_bool($value);
                $type = pdo::PARAM_BOOL;
                break;

                case is_null($value);
                $type = pdo::PARAM_NULL;
                break;
                default:
                $type = pdo::PARAM_STR;
            }
        }
            $this->stmt->bindValue($param,$value,$type);
    }

        public function execute()
        {
            return $this->stmt->execute();
        }

        //data fetch

        public function fetchAll()
        {
            $this->stmt->execute();
            $result = $this->stmt->fetchAll();
            return $result;
        }

        public function fetch()
        {
            $this->stmt->execute();
        }
        //row count
        public function rowCount()
        {
            return $this->stm->rowCount();
        }


    
    //     $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
        
    //     if (self::$instance == null) {
    //         try{
    //             self::$instance = new PDO($dsn,$user, $pass);
    //             self::$instance->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //             self::$instance->query('SET NAMES utf8');
	// 			self::$instance->query('SET CHARACTER SET utf8');
    //         }catch(PDOException $e){
    //             echo 'failed' . $e->getMessage();
    //         }
    //     } 
    //     return self::$instance;
        
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



