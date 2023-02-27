<?php
class booking{   
    private $db;
    private $add;

    public function __construct()
    {
        $this->db = new DB;
    }


    // public function getBookings()
    // {
    //     $this->db->query("SELECT * FROM reservation ");
    //     $this->db->execute();
    //     return $this->db->fetchAll();
      
    // }
    public function getBooking($id)
    { 
        $this->db->query("SELECT * FROM reservation WHERE id_reservation = :id");
        $this->db->bind(':id',$id);
        $this->db->execute();
        return $this->db->fetch();
      
    }

    public function insertBooking($ID_user, $date_reservation ,$price_reservation,$id_room,$id_cruise){
        $this->db = new DB;
        
        $sql ="INSERT INTO `reservation` (`ID_user`, `date_reservation`, `price_reservation` , `id_Room` , `ID_cruise`)
       
         VALUES     (:id_user,:date_reservation,:price_reservation , :id_Room, :Id_cruise)";

            $this->db->query($sql);
            $this->db->bind(':id_user',$ID_user);
            $this->db->bind(':date_reservation',$date_reservation);
            $this->db->bind(':price_reservation',$price_reservation);
            $this->db->bind(':id_Room',$id_room);
            $this->db->bind(':Id_cruise',$id_cruise);
            $this->db->execute();
        
    }

    public function deleteBooking ($id){
       
        $this->db->query("DELETE FROM reservation WHERE id_reservation = :id");
     
       $this->db->bind(':id',$id);
       if ($this->db->execute()) {
        return true;
       } else {
        return false;
       }
       
      }


}