<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Halaman utama perpustakaan
fungsi utama:
1. lobi utama untuk akses ke fitur perpustakaan (banyakin link )
2. tampilan data data perpustakaan yang sudah ringkas (data peminjaman buku kalo ada data lain nanti diubah) 
3. apa aja yang penting bisa membuat orang termotivasi*/ 

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_buku');
		
	
	
	}


	public function index()
	{
	
		$data["buku"]= $this->Data_buku->query();
		
		$this->load->view('Client/utama',$data);

		
	}
	public function profile()
	{
		$data["siswa"]= $this->Data_siswa->query();
		
		$this->load->view('Client/profile',$data);
		
	}
	
	
}
