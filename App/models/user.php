<?php
// require_once '../libraries/DB.php';

class user{



public function dbform($usernam,$password){



    $sql = "SELECT * FROM users WHERE username = :usr AND password = :pass limit 1" ;
    $stmt= Db::connection()->prepare($sql);
    $stmt->bindValue(':usr',$usernam);
    $stmt->bindValue(':pass',$password);

    $stmt->execute();
    $data = $stmt->fetch();
    $role = $data["Role"];
    if($role == "user") {
        return $role;
        

    } else if($role == "Admin") {
        return $role;
        
     
}

}
}