<?php

class port{

    private $db;
    

    public function __construct()
    {
        $this->db = new DB;
    }

    public function getport(){
        $stmt= $this->db->query("SELECT * FROM port ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
      
     
         }


    public function insertport($name){
     
        $sql =("INSERT INTO 'port'(name) VALUES (:name) ");
        
        $stmt=$this->db->query($sql);
        $stmt->bindValue(':name',$name,PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount()>0) {
            return true;
         } else {
             return false;
         }
           
    }


    public function deleteport ($id){
        $sql ="DELETE FROM port WHERE id=:id";
       $stmt= $this->db->query($sql);
       $stmt->bindValue(':id',$id,PDO::PARAM_INT);
      }


}


    ?>