<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function get_user($username, $password) {
        // Cek pengguna di database
        $this->db->where('nama', $username);
        $this->db->where('password', $password); // Pastikan menggunakan hashing yang sesuai
        $query = $this->db->get('siswa'); // Ganti 'users' dengan nama tabel Anda

        if ($query->num_rows() > 0) {
            return $query->row(); // Kembalikan data pengguna
        }
        return false; // Jika tidak ada pengguna ditemukan
    }
}