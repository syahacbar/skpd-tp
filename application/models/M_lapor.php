<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_lapor extends CI_Model
{
    public function get_all()
    {
        $query = $this->db->get('pengaduan');
        return $query->result();
    }

}
