<?php

class port{

    private $db;
    

    public function __construct()
    {
        $this->db = new DB;
    }

    public function getport(){
        $this->db->query("SELECT * FROM port ");
        // $this->db->bind(':id',$id);
        $this->db->execute();
        return $this->db->fetchAll();
      
     
         }
         
         public function getports(){
             $this->db->query("SELECT * FROM port ");
             $this->db->execute();
             return $this->db->fetchAll();
           
          
              }

    public function insertport($name){
       
        $sql =("INSERT INTO port (name) VALUES (:name) ");
        
        $this->db->query($sql);
        $this->db->bind(':name',$name);
        $this->db->execute();
        if ($this->db->rowCount()>0) {
            return true;
        } else {
            return false;
        }
           
    }


   

      public function deleteport ($id){
       
        $this->db->query("DELETE FROM port WHERE id=:id");
       $this->db->bind(':id',$id);
       if ($this->db->execute()) {
        return true;
       } else {
        return false;
       }
       
      }


}
