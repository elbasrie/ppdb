<?php

class Home extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        $this->load->view("template/header");
        $this->load->view("home");
	}

	public function prosedur()
	{
        $this->load->view("template/header");
        $this->load->view("prosedur");
	}
}