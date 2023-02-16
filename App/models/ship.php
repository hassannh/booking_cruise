<?php

class ship{

    private $db;
    private $add;

    public function __construct()
    {
        $this->db = new DB;
    }

    public function getship(){
        $stmt= $this->db->query("SELECT * FROM navire");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
      
         //return $this->db->resultSet();
     
         }


    public function insertship($name , $rooms ,$places){
     
        $sql = $this->db->query("INSERT INTO 'ship'(name, rooms_number, places_number) VALUES (:name, :rooms, :places) ");
        $stmt=$this->db->query($sql);
            $stmt->bindValue(':name',$name,PDO::PARAM_STR);
            $stmt->bindValue(':place',$rooms,PDO::PARAM_INT);
            $stmt->bindValue(':rooms',$places,PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount()>0) {
            return true;
         } else {
             return false;
         }
    
    }

    public function deleteship ($id){
        $sql ="DELETE FROM ship WHERE id = :id";
       $stmt= $this->db->query($sql);
       $stmt->bindValue(':id',$id,PDO::PARAM_INT);
      }

}
