<?php
class Reservation{   
    private $db;
    private $stmt;

    public function __construct()
    {
        $this->db = new DB;
    }

    public function insertReservation($ID_user,$port ,$price_reservation ,$id_Room,$ID_cruise){
    
        $sql ="INSERT INTO reservation (ID_user, port, price_reservation, id_Room, ID_cruise) VALUES (:id_user,:port,:price_reservation,:id_Room,:ID_cruise)";
        // var_dump($sql);
        
        $this->db->query($sql);
        $this->db->bind(':id_user',$ID_user);
        // $this->db->bind(':date_reservation',$date_reservation);
        $this->db->bind(':port',$port);
        $this->db->bind(':price_reservation',$price_reservation);
        $this->db->bind(':id_Room',$id_Room);
        $this->db->bind(':ID_cruise',$ID_cruise);
        $this->db->execute();
        if ($this->db->rowCount()>0) {
            return true;
        } else {
            return false;
        }
        
    }

    public function getreservation($id)
    {
        $sql = "SELECT * FROM reservation WHERE id_reservation = :id";
        $this->db->query($sql);
        $this->db->bind(':id',$id);
        $this->db->execute();
        return $this->db->fetch();

    }

    public function getreservationByUserID($id)
    {
        $sql = "SELECT u.Id,r.*,c.* FROM users u,reservation r,cruise c WHERE u.Id=r.ID_user AND r.ID_cruise=c.ID_cruise AND u.Id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id);
        $this->db->execute();
        return $this->db->fetchAll();

    }


}