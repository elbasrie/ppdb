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
        $data['total_siswa'] = $this->UserModel->hitungJumlahSiswa();
		$data['formulir'] = $this->UserModel->cekData()->result();
        $this->load->view("admin/overview", $data);
	}

	public function user()
	{
		if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
		  show_404();
		$data['user'] = $this->UserModel->cekUser()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/user', $data);
		$this->load->view('admin/footer');
	}

	public function hapus($id)
    {
		$where = array('id' => $id);
		$this->UserModel->hapusData($where,'formulir');
        redirect('admin');
    }

    public function hapusSiswa($id)
    {
		$where = array('id' => $id);
		$this->UserModel->hapusData($where,'siswa');
        redirect('admin/overview/siswa');
    }

    public function tambahSiswa()
    {
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_tlp', 'No Telp', 'required');
        $this->form_validation->set_rules('nama_ortu', 'Nama Orangtua', 'required');

        $config['upload_path'] = './assets/img/upload';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        

        $this->load->library('upload', $config);

        if ($this->form_validation->run()  == false){
            $this->load->view("admin/header");
            $this->load->view("admin/sidebar");
            $this->load->view("admin/add");
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
                'tgl_pendaftaran' => $this->input->post('tgl_pendaftaran', true),
                'asal_sekolah' => $this->input->post('asal_sekolah', true),
                'nama' => $this->input->post('nama', true),
                'nisn' => $this->input->post('nisn', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'alamat' => $this->input->post('alamat', true),
                'no_tlp' => $this->input->post('no_tlp', true),
                'nama_ortu' => $this->input->post('nama_ortu', true),
                'foto' => $gambar,
                'kk' => $gambar2,
                'akta' => $gambar3,
                'ijazah' => $gambar4,
            ];

            $this->UserModel->simpanSiswa($data);
            redirect('admin/overview/siswa');
        }
    }

    public function edit_form($id)
    {
        $where = array('id' => $id);
        $data['formulir'] = $this->UserModel->edit_data($where,'formulir')->result();
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/editdata', $data);
		$this->load->view('admin/footer');
    }

    public function edit_siswa($id)
    {
        $where = array('id' => $id);
        $data['siswa'] = $this->UserModel->edit_data($where,'siswa')->result();
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/editsiswa', $data);
		$this->load->view('admin/footer');
    }

    public function update_siswa()
    {
        $config['upload_path'] = './assets/img/upload';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        

        $this->load->library('upload', $config);

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

        $where = array('id' => $id);
        $data['siswa'] = $this->UserModel->edit_data($where,'siswa')->result();
        
        $data = [
            'asal_sekolah' => $this->input->post('asal_sekolah', true),
            'nama' => $this->input->post('nama', true),
            'nisn' => $this->input->post('nisn', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'alamat' => $this->input->post('alamat', true),
            'no_tlp' => $this->input->post('no_tlp', true),
            'nama_ortu' => $this->input->post('nama_ortu', true),
            'foto' => $gambar,
            'kk' => $gambar2,
            'akta' => $gambar3,
            'ijazah' => $gambar4,
        ];


        $this->UserModel->update_data($where,$data,'siswa');
        redirect('admin/overview/siswa');
    }

    public function approve($id)
    {
        $formulir=$this->UserModel->selectFormulir();
        foreach($formulir as $f){
            $data=[
                'id'=>$f->id,
                'tgl_pendaftaran'=>$f->tgl_pendaftaran,
                'asal_sekolah'=>$f->asal_sekolah,
                'nama'=>$f->nama,
                'nisn'=>$f->nisn,
                'jenis_kelamin'=>$f->jenis_kelamin,
                'tempat_lahir'=>$f->tempat_lahir,
                'tanggal_lahir'=>$f->tanggal_lahir,
                'no_tlp'=>$f->no_tlp,
                'alamat'=>$f->alamat,
                'foto'=>$f->foto,
                'akta'=>$f->akta,
                'kk'=>$f->kk,
                'ijazah'=>$f->ijazah,
                'nama_ortu'=>$f->nama_ortu,
            ];
        }
        $this->UserModel->insertTableSiswa($data);
        $where = array('id' => $id);
		$this->UserModel->hapusData($where,'formulir');
        redirect('admin');
    }
    public function siswa()
    {
        if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
		  show_404();
		$data['siswa'] = $this->UserModel->cekSiswa()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/siswa', $data);
		$this->load->view('admin/footer');
    }

    public function print_formulir()
    {
        $data['formulir'] = $this->UserModel->cekData()->result();

        $this->load->view('admin/print_formulir', $data);
    }

    public function print_siswa()
    {
        $data['siswa'] = $this->UserModel->cekSiswa()->result();

        $this->load->view('admin/print_siswa', $data);
    }
    public function print_user()
    {
        $data['user'] = $this->UserModel->cekUser()->result();

        $this->load->view('admin/print_user', $data);
    }

}