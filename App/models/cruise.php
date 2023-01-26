<?php
class Cruise{   
    private $db;
    private $add;

    public function __construct()
    {
        $this->db = new DB;
    }


    public function getCruises()
    {
        $this->db->query("SELECT * FROM cruise ");
        $this->db->execute();
        return $this->db->fetchAll();
      
    }
    public function getCruise($id)
    {
        $this->db->query("SELECT * FROM cruise WHERE ID_cruise=:id");
        $this->db->bind(':id',$id);
        $this->db->execute();
        return $this->db->fetch();
      
    }


    public function insertCruise($name, $ship ,$price,$picture ,$nights,$ports){
        

            $this->db->query("INSERT INTO `cruise` (`name`, `ship`, `price`,`picture`, `nights_number` ,`start_port`)
            VALUES     (:name,:ship,:price,:picture,:nights,:ports)");
            $this->db->bind(':name',$name);
            $this->db->bind(':ship',$ship);
            $this->db->bind(':price',$price);
            $this->db->bind(':picture',$picture);
            $this->db->bind(':nights',$nights);
            $this->db->bind(':ports',$ports);
            // $this->db->bind(':Picture',$Picture);
            if ($this->db->execute()) {
                return true;
               } else {
                return false;
               }
        
    }

    public function deletecruise ($id){
       
        $this->db->query("DELETE FROM cruise WHERE ID_cruise=:id");
       $this->db->bind(':id',$id);
       if ($this->db->execute()) {
        return true;
       } else {
        return false;
       }
       
      }


}