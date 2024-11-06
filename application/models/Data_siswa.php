<?php

class Data_siswa extends  CI_Controller {

    public function query()
    {
        $query= $this->db->query("SELECT * FROM `siswa`");
        return $query->result_array();
    }

}
?>