<?php

class Feedback_model extends CI_Model
{
    public function simpanData($data, $table)
    {
        $this->db->insert($table, $data);
    }
}