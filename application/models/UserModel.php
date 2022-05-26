<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model {
    
    public function get($email){
        $this->db->where('email', $email); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
    
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
    public function simpanFormulir($data = null)
    {
        $this->db->insert('formulir',$data);
    }
    
}