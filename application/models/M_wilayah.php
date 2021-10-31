<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_wilayah extends CI_Model
{
    public function get_by_id($id)
    {
        $query = $this->db->get_where('wilayah_2020',array('kode'=>$id));
        return $query->row();
    }

}
