  <?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// class Login extends CI_Controller {

//     public function __construct() {
//         parent::__construct();
//         $this->load->model('User_model'); // Model untuk mengelola pengguna
//         $this->load->library('session');
        

        
    
//     }

//     public function index() {
//         $this->load->view('Client/login'); // Load view login
//     }

//     public function authenticate() {
//         $username = $this->input->post('nama');
//         $password = $this->input->post('password');

//         // Cek kredensial pengguna
//         $user = $this->User_model->get_user($username, $password);

//         if ($user) {
//             //Set session data jika login berhasil
//             $this->session->set_userdata('nama', $user);
//             header("Location: http://location/n/Home")// Redirect ke halaman dashboard
//         } else {
//             // Jika login gagal, kembali ke form dengan pesan error
//             $this->session->set_flashdata('error', 'Username atau password salah.');
//             redirect('login');
//         }
//     }

//     public function logout() {
//         $this->session->sess_destroy(); // Hapus session
//         redirect('login'); // Redirect ke halaman login
//     }
// } 

?> 