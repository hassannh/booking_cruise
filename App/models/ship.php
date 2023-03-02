<?php

class ship
{

    private $db;

    public function __construct()
    {
        $this->db = new DB;
    }

 

    public function getship()
    {
        $stmt = $this->db->query("SELECT * FROM navire");
        $stmt->execute();
        return $this->db->fetchAll();
      
    }


    public function insertship($name, $rooms, $places)
    {

        $sql = $this->db->query("INSERT INTO 'navire'(name, rooms_number, places_number) VALUES (:name, :rooms, :places) ");
        $stmt = $this->db->query($sql);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':place', $rooms, PDO::PARAM_INT);
        $stmt->bindValue(':rooms', $places, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_ships($id)
    {
        $sql = "DELETE FROM navire WHERE id = :id";
        $stmt = $this->db->query($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    }
}
