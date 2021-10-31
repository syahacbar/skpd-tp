<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengaduan extends CI_Model
{

    function get_all()
    {
        $query = $this->db->query("SELECT p.*, (SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_kabkota) AS nama_kabkota, (SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_distrik) AS nama_distrik, (SELECT u1.nama_file FROM upload u1 WHERE u1.kategori = 'dokumentasi1' AND u1.kodelaporan = p.kodelaporan) AS dokumentasi1, (SELECT u2.nama_file FROM upload u2 WHERE u2.kategori = 'dokumentasi2' AND u2.kodelaporan = p.kodelaporan) AS dokumentasi2, (SELECT u3.nama_file FROM upload u3 WHERE u3.kategori = 'dokumentasi3' AND u3.kodelaporan = p.kodelaporan) AS dokumentasi3 FROM pengaduan p");

        // $query = $this->db->get('pengaduan');
        return $query->result();
    }

    function add($params)
    {
        $this->db->insert('pengaduan', $params);
        return $this->db->insert_id();
    }

    function get_lastrow()
    {
        $last_idlap = $this->db->order_by('id',"desc")
            ->limit(1)
            ->get('pengaduan');
        return $last_idlap;
    }


}



