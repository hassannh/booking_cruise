<?php

class Room
{

    private $db;


    public function __construct()
    {
        $this->db = new DB;
    }

    public function getRoom($id_room_type)
    {

        $this->db->query("SELECT
                            *
                        FROM
                            room
                        WHERE
                            id_room_type = :id_room_type AND id NOT IN (
                                SELECT id_Room FROM reservation
                                )
                        ORDER BY
                            id
                        DESC
                        LIMIT 1;");

        $this->db->bind(':id_room_type', $id_room_type);
        $this->db->execute();
        return $this->db->fetch();
    }
    public function getShipRoom($id)
    {

        $this->db->query("SELECT
                            r.* ,rt.name,rt.price
                        FROM
                            room r
                        join room_type rt  on rt.id = r.id_room_type
                        WHERE
                            r.ship = :ship AND r.id NOT IN (
                                SELECT id_Room FROM reservation
                                )
                        ORDER BY
                            r.id
                        DESC");

        $this->db->bind(':ship', $id);
        $this->db->execute();
        return $this->db->fetchAll();
    }


    public function insertRoomTypes($id_room_type)
    {

        $sql = ("INSERT INTO room(id_room_type) VALUES (:id_room_type) ");

        $this->db->query($sql);
        $this->db->bind(':id_room_type', $id_room_type);

        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
