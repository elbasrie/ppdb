<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		cek_login();
	}

	public function index()
	{
		if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
		  show_404();
        // load view admin/overview.php
		$data['total_formulir'] = $this->UserModel->hitungJumlahFormulir();
		$data['total_user'] = $this->UserModel->hitungJumlahUser();
		$data['formulir'] = $this->UserModel->cekData()->result();
        $this->load->view("admin/overview", $data);
	}

}