<?php
class Reservation{   
    private $db;
    private $stmt;

    public function __construct()
    {
        $this->db = new DB;
    }

    public function insertReservation($ID_user, $date_reservation ,$price_reservation ,$id_Room,$ID_cruise){
    
        $sql ="INSERT INTO `reservation`(`ID_user`, `date_reservation`, `price_reservation`, `id_Room`, `ID_cruise`) VALUES (':id_user',':date_reservation',':price_reservation',':id_Room',':ID_cruise')";
        // var_dump($sql);
        
        $this->db->query($sql);
        $this->db->bind(':id_user',$ID_user);
        $this->db->bind(':date_reservation',$date_reservation);
        $this->db->bind(':price_reservation',$price_reservation);
        $this->db->bind(':id_Room',$id_Room);
        $this->db->bind(':ID_cruise',$ID_cruise);
        $this->db->execute($sql);
        if ($this->db->rowCount()>0) {
            return true;
        } else {
            return false;
        }
        
    }

}