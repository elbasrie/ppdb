<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends MY_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
  }

  public function index(){
    if($this->session->userdata('authenticated')) 
      redirect('user');
    $this->load->view("template/header");
    $this->load->view("login");
  }

  public function login(){
    $email = $this->input->post('email'); 
    $password = md5($this->input->post('password')); 
    $user = $this->UserModel->get($email);
    if(empty($user)){ 
      $this->session->set_flashdata('message', 'Username tidak ditemukan'); 
      redirect('auth');
    }else{
      if($password == $user->password){ 
        $session = array(
          'authenticated'=>true,
          'id'=>$user->id, 
          'email'=>$user->email, 
          'nama'=>$user->nama, 
          'role'=>$user->role 
        );
        $this->session->set_userdata($session);
        if ($this->session->userdata('role') == 'visitor') {
          redirect('user');
        } elseif ($this->session->userdata('role') == 'admin'){
          redirect('admin');
        }
      }else{
        $this->session->set_flashdata('message', 'Password salah');
        redirect('auth');
      }
    }
  }

  public function registrasi()
    {
      $this->load->view("template/header");
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama Belum diis!!'
        ]);
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email Tidak Benar!!',
            'required' => 'Email Belum diisi!!',
            'is_unique' => 'Email Sudah Terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak Sama!!',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');
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

            $this->UserModel->simpanData($data); 

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