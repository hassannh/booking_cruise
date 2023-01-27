<?php

class Room{

    private $db;
    

    public function __construct()
    {
        $this->db = new DB;
    }

    public function getRoom($id_room_type){
        $this->db->query("SELECT * FROM room WHERE id_room_type = :id_room_type ORDER BY id DESC");
        $this->db->bind(':id_room_type',$id_room_type);
        $this->db->execute();
        return $this->db->fetch();
    }


    public function insertRoomTypes($id_room_type){
     
        $sql =("INSERT INTO room(id_room_type) VALUES (:id_room_type) ");
        
        $this->db->query($sql);
        $this->db->bind(':id_room_type',$id_room_type);
   
        $this->db->execute();
        if ($this->db->rowCount()>0) {
            return true;
         } else {
             return false;
         }
           
    }


}


    ?>