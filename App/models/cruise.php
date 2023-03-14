<?php
class Cruise
{
    private $db;

    public function __construct()
    {
        $this->db = new DB;
    }


    public function getCruises()
    {
        $this->db->query("SELECT 
        cruise.* , port.name as start_port
        FROM cruise inner join port where cruise.id_port = port.id and
        (YEAR(start_date) = YEAR(NOW()) AND  MONTH(start_date) >= MONTH(NOW()) AND DAY(start_date) >= DAY(NOW()))
        OR (YEAR(start_date) > YEAR(NOW()))");
        $this->db->execute();
        return $this->db->fetchAll();
    }
 


    public function getCruise($id)
    {
        $this->db->query("
        SELECT c.*,p.name as portName,n.name as shipName,COUNT(r.id) as places FROM
        cruise c 
        JOIN navire n ON c.ship = n.id
        JOIN port p ON c.id_port = p.id
        JOIN room r ON r.ship = n.id
        WHERE r.id NOT IN (SELECT id_Room from  reservation ) and c.ID_cruise = :id
        GROUP by c.ID_cruise
        ");
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->fetch();
    }
    


    public function insertCruise($name, $ship, $price, $picture, $nights, $ports, $date, $trajet)
    {


        $this->db->query("INSERT INTO `cruise` (`name`, `ship`, `price`,`picture`, `nights_number` ,`id_port`, `start_date`,`trager`)
            VALUES     (:name,:ship,:price,:picture,:nights,:ports,:start_date,:trajet)");
        $this->db->bind(':name', $name);
        $this->db->bind(':ship', $ship);
        $this->db->bind(':price', $price);
        $this->db->bind(':picture', $picture);
        $this->db->bind(':nights', $nights);
        $this->db->bind(':ports', $ports);
        $this->db->bind(':start_date', $date);
        $this->db->bind(':trajet', $trajet);
       $this->db->execute();
       return true;
    }

    public function deletecruise($id) 
    {

        $this->db->query("DELETE FROM cruise WHERE ID_cruise=:id");
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function search($sqlEnd)
    {

        $sql = "SELECT 
        cruise.* , port.name as start_port
        FROM cruise inner join port where cruise.id_port = port.id" . $sqlEnd." and
        (YEAR(start_date) = YEAR(NOW()) AND  MONTH(start_date) >= MONTH(NOW()) AND DAY(start_date) >= DAY(NOW()))
        OR (YEAR(start_date) > YEAR(NOW()))";
        $this->db->query($sql);
        $this->db->execute();
        $this->db->fetchAll();
        return $this->db->fetchAll();
    }
}