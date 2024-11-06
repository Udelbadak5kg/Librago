<?php

class Peminjaman extends CI_Controller
{
    public function __construct()
    {   
        parent :: __construct();
        $this->load->model('Peminjaman_model');

        
    }

    public function index()
    {
        
    }
}