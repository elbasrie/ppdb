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
    public function cekDataById($where)
    {

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
    public function cekUser($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
    public function simpanFormulir($data = null)
    {
        $this->db->insert('formulir',$data);
    }
    public function simpanKritik($data = null)
    {
        $this->db->insert('suggest',$data);
    }
    
}