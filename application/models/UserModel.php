<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model {
    
    public function get($email){
        $this->db->where('email', $email); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
    public function cekData()
    {
        return $this->db->get('formulir');
    }
    public function cekDataBySession()
    {
        $this->db->where('id_user', $this->session->userdata ('id'));
        return $this->db->get('formulir');
    }
    public function hitungJumlahFormulir()
    {   
        $query = $this->db->get('formulir');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hitungJumlahUser()
    {   
        $query = $this->db->get('user');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hitungJumlahSiswa()
    {   
        $query = $this->db->get('siswa');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function cekUser()
    {
        return $this->db->get('user');
    }
    public function cekSiswa()
    {
        return $this->db->get('siswa');
    }
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
    public function simpanFormulir($data = null)
    {
        $this->db->insert('formulir',$data);
    }
    public function simpanSiswa($data = null)
    {
        $this->db->insert('siswa',$data);
    }
    public function hapusData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function hapusDataById()
    {
        $this->db->where('id_user', $this->session->userdata ('id'));
        $this->db->delete('formulir');
    }	
    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }
    function update_data($where,$data,$table){
		$this->db->update($table,$data,$where);
	}	
    function edit_dataById(){	
        $this->db->where('id_user', $this->session->userdata ('id'));	
        return $this->db->get('formulir');
    }
    public function update_dataById($data)
    {
        $this->db->where('id_user', $this->session->userdata ('id'));
		$this->db->update('formulir',$data);
    }
    public function selectFormulir()
    {
        $this->db->select('*');
        $this->db->from('formulir');
        return $this->db->get()->result();
    }
    public function insertTableSiswa($data)
    {
        $this->db->insert('siswa',$data);
    }
}