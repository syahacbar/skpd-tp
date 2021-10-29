<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengaduan extends CI_Model
{
    public function get_all()
    {
        $query = $this->db->get('pengaduan', 'upload');
        return $query->result_array();

    }

    // function add_biodata($params)
    // {
    //     $this->db->insert('upload', $params);
    //     return $this->db->insert_id();
    // }

}



