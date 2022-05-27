<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends MY_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
  }

  public function index(){
    if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
      redirect('user'); // Redirect ke page home
    // function render_login tersebut dari file core/MY_Controller.php
    $this->load->view("template/header");
    $this->load->view("login");
  }

  public function login(){
    $email = $this->input->post('email'); // Ambil isi dari inputan email pada form login
    $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
    $user = $this->UserModel->get($email); // Panggil fungsi get yang ada di UserModel.php
    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      $this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
      redirect('auth'); // Redirect ke halaman login
    }else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'authenticated'=>true, // Buat session authenticated dengan value true
          'id'=>$user->id, // Buat session id
          'email'=>$user->email,  // Buat session email
          'nama'=>$user->nama, // Buat session nama
          'role'=>$user->role // Buat session role
        );
        $this->session->set_userdata($session); // Buat session sesuai $session
        if ($this->session->userdata('role') == 'visitor') {
          redirect('user');// Redirect ke halaman user
        } elseif ($this->session->userdata('role') == 'admin'){
          redirect('admin');
        }
      }else{
        $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
        redirect('auth'); // Redirect ke halaman login
      }
    }
  }

  public function registrasi()
    {
      $this->load->view("template/header");
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        //membuat rule untuk inputan nama agar tidak boleh kosong dengan membuat pesan error dengan 
        //bahasa sendiri yaitu 'Nama Belum diisi'
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama Belum diis!!'
        ]);
        //membuat rule untuk inputan email agar tidak boleh kosong, tidak ada spasi, format email harus valid
        //dan email belum pernah dipakai sama user lain dengan membuat pesan error dengan bahasa sendiri 
        //yaitu jika format email tidak benar maka pesannya 'Email Tidak Benar!!'. jika email belum diisi,
        //maka pesannya adalah 'Email Belum diisi', dan jika email yang diinput sudah dipakai user lain,
        //maka pesannya 'Email Sudah dipakai'
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email Tidak Benar!!',
            'required' => 'Email Belum diisi!!',
            'is_unique' => 'Email Sudah Terdaftar!'
        ]);
        //membuat rule untuk inputan password agar tidak boleh kosong, tidak ada spasi, tidak boleh kurang dari
        //dari 3 digit, dan password harus sama dengan repeat password dengan membuat pesan error dengan  
        //bahasa sendiri yaitu jika password dan repeat password tidak diinput sama, maka pesannya
        //'Password Tidak Sama'. jika password diisi kurang dari 3 digit, maka pesannya adalah 
        //'Password Terlalu Pendek'.
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak Sama!!',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');
        //jika jida disubmit kemudian validasi form diatas tidak berjalan, maka akan tetap berada di
        //tampilan registrasi. tapi jika disubmit kemudian validasi form diatas berjalan, maka data yang 
        //diinput akan disimpan ke dalam tabel user
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi Member';

            $this->load->view('registrasi');

        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'password' => md5($this->input->post('password1')),
                'role' => 'visitor',
            ];

            $this->UserModel->simpanData($data); //menggunakan model

            redirect('auth');
        }
    }

  public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->sess_destroy();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('auth');
    }
}