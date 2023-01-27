<?php

class RoomTypes{

    private $db;
    

    public function __construct()
    {
        $this->db = new DB;
    }

    public function getRoomTypes(){
        $this->db->query("SELECT * FROM room_type ");
        $this->db->execute();
        return $this->db->fetchAll();
      
     
         }


    public function insertRoomTypes($name,$price,$capacity){
     
        $sql =("INSERT INTO room_type(name ,price,capacity) VALUES (:name,:price,:capacity) ");
        
        $this->db->query($sql);
        $this->db->bind(':name',$name);
        $this->db->bind(':price',$price);
        $this->db->bind(':capacity',$capacity);
        $this->db->execute();
        if ($this->db->rowCount()>0) {
            return true;
         } else {
             return false;
         }
           
    }


    public function deleteRoomTypes ($id){
        $sql ="DELETE FROM room_type WHERE id=:id";
       $this->db->query($sql);
       $this->db->bind(':id',$id);
      }


}


    ?>