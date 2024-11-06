<?php

class Data_buku extends CI_Model
{

   

    public function query()
    {
        $query = $this->db->query("SELECT * FROM buku");

        return $query->result_array();
        
    }

    public function tambah($data)
    { 

    }
  
}


