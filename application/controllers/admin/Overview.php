<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
		  show_404();
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}

}