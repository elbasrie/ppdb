<?php

class Kritik extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->model('feedback_model');
        $this->load->helper('url');
	}

	public function index()
	{
        $this->load->view("template/header");
        $this->load->view("kritik");
	}

    public function suggest()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kritik', 'kritik', 'required|max_lenght[255]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Kritik dan Saran';

        } else {
            $kritik = $this->input->post('kritik');

            $data = array(
                'kritik' => $kritik,
            );
            $this->feedback_model->simpanData($data);

            redirect('kritik');
        }
    }

}