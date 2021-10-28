<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_lapor extends CI_Model
{
    public function get_all()
    {
        $query = $this->db->get('pengaduan');
        return $query->result();
    }


    function get_lastrow()
    {
        $last_idlap = $this->db->order_by('id', "desc")
            ->limit(1)
            ->get('pengaduan');
        return $last_idlap;
    }

    function get_wilayah($kode)
    {
        return $this->db->get_where('wilayah_2020', array('kode' => $kode))->row_array();
    }

    function get_pengaduan($id)
    {
        return $this->db->get_where('pengaduan', array('id' => $id))->row_array();
    }

    function get_infrastruktur($x)
    {
        return $this->db->get_where('pengaduan', array('infrastruktur' => $x));
    }

    function get_kabkota($kab)
    {
        return $this->db->get_where('wilayah_2020', array('kode' => $kab))->row();
    }

    function get_all_pengaduan_bykabkota($kab = NULL, $limit = NULL, $offset = NULL, $infrastruktur = NULL, $order = NULL, $asdesc = NULL, $status = NULL)
    {
        $this->db->select('l.*');
        $this->db->select('(SELECT a.nama FROM wilayah_2020 a WHERE a.kode=l.kab_pelapor) AS kabpelapor');
        $this->db->select('(SELECT b.nama FROM wilayah_2020 b WHERE b.kode=l.kec_pelapor) AS kecpelapor');
        $this->db->select('(SELECT c.nama FROM wilayah_2020 c WHERE c.kode=l.des_pelapor) AS despelapor');
        $this->db->select('(SELECT x.nama FROM wilayah_2020 x WHERE x.kode=l.lokasi_kabkota) AS lokasikabkota');
        $this->db->select('(SELECT y.nama FROM wilayah_2020 y WHERE y.kode=l.lokasi_distrik) AS lokasidistrik');
        $this->db->select('(SELECT u.nama_file FROM upload u WHERE u.kodelaporan=l.kodelaporan AND u.kategori="dokumentasi1") AS dokumentasi1');
        $this->db->select('(SELECT u.nama_file FROM upload u WHERE u.kodelaporan=l.kodelaporan AND u.kategori="dokumentasi2") AS dokumentasi2');
        $this->db->select('(SELECT u.nama_file FROM upload u WHERE u.kodelaporan=l.kodelaporan AND u.kategori="dokumentasi3") AS dokumentasi3');
        $this->db->select('(SELECT u.nama_file FROM upload u WHERE u.kodelaporan=l.kodelaporan AND u.kategori="ktp") AS ktp');

        if ($kab != NULL) {
            $this->db->where('l.lokasi_kabkota', $kab);
        }
        if ($infrastruktur != NULL) {
            $this->db->where('l.infrastruktur', $infrastruktur);
        }
        if ($status != NULL) {
            $this->db->where('l.status', $status);
        }
        $this->db->from('pengaduan l');

        if ($order != NULL && $asdesc != NULL) {
            $this->db->order_by($order, $asdesc);
        }

        if ($limit != NULL) {
            $this->db->limit($limit);
        }
        if ($offset != NULL) {
            $this->db->limit($limit, $offset);
        }

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_pengaduan_bykabkota_filter($kab = NULL, $limit = NULL, $offset = NULL, $infrastruktur = NULL, $kodekec = NULL, $status = NULL, $order = NULL, $asdesc = NULL)
    {
        $this->db->select('l.*');
        $this->db->select('(SELECT a.nama FROM wilayah_2020 a WHERE a.kode=l.kab_pelapor) AS kabpelapor');
        $this->db->select('(SELECT b.nama FROM wilayah_2020 b WHERE b.kode=l.kec_pelapor) AS kecpelapor');
        $this->db->select('(SELECT c.nama FROM wilayah_2020 c WHERE c.kode=l.des_pelapor) AS despelapor');
        $this->db->select('(SELECT x.nama FROM wilayah_2020 x WHERE x.kode=l.lokasi_kabkota) AS lokasikabkota');
        $this->db->select('(SELECT y.nama FROM wilayah_2020 y WHERE y.kode=l.lokasi_distrik) AS lokasidistrik');
        $this->db->select('(SELECT u.nama_file FROM upload u WHERE u.kodelaporan=l.kodelaporan AND u.kategori="dokumentasi1") AS dokumentasi1');
        $this->db->select('(SELECT u.nama_file FROM upload u WHERE u.kodelaporan=l.kodelaporan AND u.kategori="dokumentasi2") AS dokumentasi2');
        $this->db->select('(SELECT u.nama_file FROM upload u WHERE u.kodelaporan=l.kodelaporan AND u.kategori="dokumentasi3") AS dokumentasi3');
        $this->db->select('(SELECT u.nama_file FROM upload u WHERE u.kodelaporan=l.kodelaporan AND u.kategori="ktp") AS ktp');

        if ($kab != NULL) {
            $this->db->where('l.lokasi_kabkota', $kab);
        }
        if ($infrastruktur != NULL) {
            $this->db->where('l.infrastruktur', $infrastruktur);
        }
        if ($kodekec != NULL) {
            $this->db->where('l.lokasi_distrik', $kodekec);
        }
        if ($status != NULL) {
            $this->db->where('l.status', $status);
        }

        $this->db->from('pengaduan l');
        if ($order != NULL && $asdesc != NULL) {
            $this->db->order_by($order, $asdesc);
        }

        if ($limit != NULL) {
            $this->db->limit($limit);
        }
        if ($offset != NULL) {
            $this->db->limit($limit, $offset);
        }

        $query = $this->db->get();
        return $query->result_array();
    }


    function get_all_pengaduan($infrastruktur = NULL, $limit = NULL, $offset = NULL, $group = NULL, $order = NULL, $asdesc = NULL, $status = NULL)
    {
        $this->db->select('l.*');
        $this->db->select('(SELECT a.nama FROM wilayah_2020 a WHERE a.kode=l.kab_pelapor) AS kabpelapor');
        $this->db->select('(SELECT b.nama FROM wilayah_2020 b WHERE b.kode=l.kec_pelapor) AS kecpelapor');
        $this->db->select('(SELECT c.nama FROM wilayah_2020 c WHERE c.kode=l.des_pelapor) AS despelapor');
        $this->db->select('(SELECT x.nama FROM wilayah_2020 x WHERE x.kode=l.lokasi_kabkota) AS lokasikabkota');
        $this->db->select('(SELECT y.nama FROM wilayah_2020 y WHERE y.kode=l.lokasi_distrik) AS lokasidistrik');
        $this->db->select('(SELECT u.nama_file FROM upload u WHERE u.kodelaporan=l.kodelaporan AND u.kategori="dokumentasi1") AS dokumentasi1');
        $this->db->select('(SELECT u.nama_file FROM upload u WHERE u.kodelaporan=l.kodelaporan AND u.kategori="dokumentasi2") AS dokumentasi2');
        $this->db->select('(SELECT u.nama_file FROM upload u WHERE u.kodelaporan=l.kodelaporan AND u.kategori="dokumentasi3") AS dokumentasi3');
        $this->db->select('(SELECT u.nama_file FROM upload u WHERE u.kodelaporan=l.kodelaporan AND u.kategori="ktp") AS ktp');

        if ($infrastruktur != NULL) {
            $this->db->where('l.infrastruktur', $infrastruktur);
        }

        if ($status != NULL) {
            $this->db->where('l.status', $status);
        }

        $this->db->from('pengaduan l');

        if ($limit != NULL) {
            $this->db->limit($limit);
        }
        if ($offset != NULL) {
            $this->db->limit($limit, $offset);
        }
        if ($group != NULL) {
            $this->db->group_by($group);
        }
        if ($order != NULL && $asdesc != NULL) {
            $this->db->order_by($order, $asdesc);
        }


        $query = $this->db->get();
        return $query->result_array();
    }

    function count_all_pengaduan($status = NULL, $kab = NULL, $infrastruktur = NULL)
    {
        $this->db->select('l.*');

        if ($infrastruktur != NULL) {
            $this->db->where('l.infrastruktur', $infrastruktur);
        }

        if ($status != NULL) {
            $this->db->where('l.status', $status);
        }

        if ($kab != NULL) {
            $this->db->where('l.lokasi_kabkota', $kab);
        }

        $this->db->from('pengaduan l');




        $query = $this->db->get();
        return $query->num_rows();
    }
}
