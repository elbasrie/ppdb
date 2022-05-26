<?php

class User extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        $this->load->view("template/header");
        $this->load->view("user");
	}

    public function formulir()
    {
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_tlp', 'No Telp', 'required');
        $this->form_validation->set_rules('nama_ortu', 'Nama Orangtua', 'required');

        $config['upload_path'] = './assets/img/upload';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['file_name'] = 'img' . time();

        $this->load->library('upload', $config);

        if ($this->form_validation->run()  == false){
            $this->load->view("template/header");
            $this->load->view("template/sidebar");
            $this->load->view("formulir");
        } else {
            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data();
                $gambar = $foto['file_name'];
            } else {
                $gambar = '';
            }

            $data = [
                'asal_sekolah' => $this->input->post('asal_sekolah', true),
                'nama' => $this->input->post('nama', true),
                'nisn' => $this->input->post('nisn', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'alamat' => $this->input->post('alamat', true),
                'email'=> $this->input->post('email', true),
                'no_tlp' => $this->input->post('no_tlp', true),
                'nama_ortu' => $this->input->post('nama_ortu', true),
                'foto' => $gambar
            ];

            $this->UserModel->simpanFormulir($data);
            redirect('user/formulir');
        }
    }

}