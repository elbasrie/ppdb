<?php

class User extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        cek_login();
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
        
        $user_id = $this->session->userdata('id');

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
            if ($this->upload->do_upload('kk')) {
                $kk = $this->upload->data();
                $gambar2 = $kk['file_name'];
            } else {
                $gambar2 = '';
            }
            if ($this->upload->do_upload('akta')) {
                $akta = $this->upload->data();
                $gambar3 = $akta['file_name'];
            } else {
                $gambar3 = '';
            }
            if ($this->upload->do_upload('ijazah')) {
                $ijazah = $this->upload->data();
                $gambar4 = $ijazah['file_name'];
            } else {
                $gambar4 = '';
            }

            $data = [
                'id_user' => $user_id,
                'tgl_pendaftaran' => $this->input->post('tgl_pendaftaran', true),
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
                'foto' => $gambar,
                'kk' => $gambar2,
                'akta' => $gambar3,
                'ijazah' => $gambar4,
            ];

            $this->UserModel->simpanFormulir($data);
            redirect('user/formulir');
        }
    }

    public function data(){
        $data['formulir'] = $this->UserModel->cekDataBySession()->result();
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view("data", $data);
    }

    public function hapus()
    {
		$this->UserModel->hapusDataById();
        redirect('user');
    }
    
    public function edit()
    {
        $data['formulir'] = $this->UserModel->edit_dataById()->result();
        $this->load->view("template/header");
        $this->load->view("template/sidebar");
        $this->load->view('edit',$data);
    }
    public function update()
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
        
        $user_id = $this->session->userdata('id');

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
            if ($this->upload->do_upload('kk')) {
                $kk = $this->upload->data();
                $gambar2 = $kk['file_name'];
            } else {
                $gambar2 = '';
            }
            if ($this->upload->do_upload('akta')) {
                $akta = $this->upload->data();
                $gambar3 = $akta['file_name'];
            } else {
                $gambar3 = '';
            }
            if ($this->upload->do_upload('ijazah')) {
                $ijazah = $this->upload->data();
                $gambar4 = $ijazah['file_name'];
            } else {
                $gambar4 = '';
            }

            $data = [
                'id_user' => $user_id,
                'tgl_pendaftaran' => $this->input->post('tgl_pendaftaran', true),
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
                'foto' => $gambar,
                'kk' => $gambar2,
                'akta' => $gambar3,
                'ijazah' => $gambar4,
            ];

            $this->UserModel->update_dataById($data);
            redirect('user/data');
        }
    }

    public function print_data()
    {
        $data['formulir'] = $this->UserModel->cekDataBySession()->result();

        $this->load->view('print_data', $data);
    }

}