<?php

class Kritik extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        
        $this->form_validation->set_rules('kritik', 'kritik', 'required|max_lenght[255]');

        if ($this->form_validation->run() == false){
            $this->load->view("template/header");
            $this->load->view("kritik");
        } else {
            $data = [
                'kritik' => $this->input->post('kritik', true),
            ];

            $this->UserModel->simpanKritik($data);
            redirect('kritik');
        }
	}


}