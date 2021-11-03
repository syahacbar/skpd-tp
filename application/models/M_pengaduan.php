<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengaduan extends CI_Model
{

    function get_all()
    {
        //$query = $this->db->query("SELECT p.*, (SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_kabkota) AS nama_kabkota, (SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_distrik) AS nama_distrik, (SELECT u1.nama_file FROM upload u1 WHERE u1.kategori = 'dokumentasi1' AND u1.kodelaporan = p.kodelaporan) AS dokumentasi1, (SELECT u2.nama_file FROM upload u2 WHERE u2.kategori = 'dokumentasi2' AND u2.kodelaporan = p.kodelaporan) AS dokumentasi2, (SELECT u3.nama_file FROM upload u3 WHERE u3.kategori = 'dokumentasi3' AND u3.kodelaporan = p.kodelaporan) AS dokumentasi3 FROM pengaduan p");

        $this->db->select("p.*");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_kabkota) AS nama_kabkota");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_distrik) AS nama_distrik");
        $this->db->select("(SELECT u1.nama_file FROM upload u1 WHERE u1.kategori ='dokumentasi1' AND u1.kodelaporan = p.kodelaporan) AS dokumentasi1");
        $this->db->select("(SELECT u2.nama_file FROM upload u2 WHERE u2.kategori = 'dokumentasi2' AND u2.kodelaporan = p.kodelaporan) AS dokumentasi2");
        $this->db->select("(SELECT u3.nama_file FROM upload u3 WHERE u3.kategori = 'dokumentasi3' AND u3.kodelaporan = p.kodelaporan) AS dokumentasi3");
        $this->db->from("pengaduan p");
        
        $query = $this->db->get();

        return $query->result();
    }

    function get_filter($inf=NULL,$kab=NULL,$status=NULL,$startdate=NULL,$todate=NULL)
    {
        $this->db->select("p.*");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.kab_pelapor) AS nama_kabpelapor");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.kec_pelapor) AS nama_kecpelapor");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.des_pelapor) AS nama_despelapor");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_kabkota) AS nama_kabkota");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_distrik) AS nama_distrik");
        $this->db->select("(SELECT u1.nama_file FROM upload u1 WHERE u1.kategori ='dokumentasi1' AND u1.kodelaporan = p.kodelaporan) AS dokumentasi1");
        $this->db->select("(SELECT u2.nama_file FROM upload u2 WHERE u2.kategori = 'dokumentasi2' AND u2.kodelaporan = p.kodelaporan) AS dokumentasi2");
        $this->db->select("(SELECT u3.nama_file FROM upload u3 WHERE u3.kategori = 'dokumentasi3' AND u3.kodelaporan = p.kodelaporan) AS dokumentasi3");
        $this->db->from("pengaduan p");

        //kondisi status 
        if($status != NULL)
        {
            $this->db->where('p.status',$status);
        }

        if ($startdate!=NULL && $todate!=NULL)
        {
            $this->db->where('p.tgl_laporan >=',$startdate);
            $this->db->where('p.tgl_laporan <=',$todate);
        }

        //kondisi infrastruktur terpilih
        if($inf != NULL && $kab == NULL)
        {
            $this->db->where('p.infrastruktur',$inf);
        }

        //kondisi kab/kota terpilih
        elseif($inf == NULL && $kab != NULL)
        {
            $this->db->where('p.lokasi_kabkota',$kab);
        }

        //kondisi infrastruktur dan kab/kota terpilih
        elseif($inf != NULL && $kab != NULL)
        {
            $this->db->where('p.infrastruktur',$inf);
            $this->db->where('p.lokasi_kabkota',$kab);
        }
        else
        {

        }        

        $query = $this->db->get();
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



