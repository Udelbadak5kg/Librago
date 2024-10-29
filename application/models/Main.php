<?php

class Main extends CI_Model
{

    public function __construct()
    {
       $this->load->database();
        
        
    }


    public function query()
    {
        $query = $this->db->query("SELECT * FROM buku");

        return $query->result_array();
        
    }
  
}


