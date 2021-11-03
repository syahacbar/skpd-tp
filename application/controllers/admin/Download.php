<?php defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_pengaduan','M_wilayah']);

    }

    public function index()
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 5 AND LEFT(kode,2) = '92' AND (RIGHT(kode,2) = '02' OR RIGHT(kode,2) = '71')");

        $data['kabupaten'] = $query->result();
        $data['_view'] = 'admin/download';
        $this->load->view('admin/layout', $data);
    }

    function cetakpdf()
    {
        $this->load->library('Pdf');

        if(!empty($_POST))
        {
            $fil_jenisinfra = $this->input->post('pilihinfra');
            $fil_kabkota = $this->input->post('kabupaten');
            $fil_tglawal = $this->input->post('startdate');
            $fil_tglakhir = $this->input->post('todate');
            $fil_formatcetak = $this->input->post('formatcetak');
            $fil_status = $this->input->post('statuslaporan');
            $fil_dengangambar = $this->input->post('pilihangambar');
            $range = date_indo($fil_tglawal)." s.d. ".date_indo($fil_tglakhir);
            $data['tanggal'] = $range;


            if($fil_formatcetak == "cetakexcel")
            {
                //untuk aksi cetak excel mainkan disini, pendek saja itu scriptnya, buka sisikat punya, gampang itu, ingat ada controller cetakexcel

                if($fil_kabkota == NULL || $fil_kabkota == 'Semua')
                {            
                    $namakabkota = 'Semua Kab/Kota';
                } else {
                    $namakabkota = $this->M_wilayah->get_by_id($fil_kabkota)->nama;
                }

                if($fil_jenisinfra == NULL || $fil_jenisinfra == 'Semua')
                {
                    $namainfrastruktur = 'Semua Infrastruktur';
                } else {
                     $namainfrastruktur = $fil_jenisinfra;
                }
                $this->cetakexcel($fil_jenisinfra,$fil_kabkota,$fil_tglawal,$fil_tglakhir,$range,$fil_status,$namakabkota,$namainfrastruktur);
            } 
            elseif($fil_formatcetak == "cetakpdf")
            {
                if($fil_jenisinfra == 'Semua' && $fil_kabkota == 'Semua')
                {
                    $data['pengaduan'] = $this->M_pengaduan->get_filter(NULL,NULL,$fil_status,$fil_tglawal,$fil_tglakhir);
                    $this->load->view('admin/cetakpdfallinfraallkabkota',$data);
                }
                elseif($fil_jenisinfra == 'Semua' && $fil_kabkota != 'Semua')
                {
                    $namakabkota = $this->M_wilayah->get_by_id($fil_kabkota);
                    $data['kabkota'] = strtoupper($namakabkota->nama);
                    $data['pengaduan'] = $this->M_pengaduan->get_filter(NULL,$fil_kabkota,$fil_status,$fil_tglawal,$fil_tglakhir);
                    $this->load->view('admin/cetakpdfallinfraonekabkota',$data);
                }
                elseif($fil_jenisinfra != 'Semua' && $fil_kabkota == 'Semua')
                {
                    $data['infrastruktur'] = strtoupper($fil_jenisinfra);
                    $data['pengaduan'] = $this->M_pengaduan->get_filter($fil_jenisinfra,NULL,$fil_status,$fil_tglawal,$fil_tglakhir);
                    $this->load->view('admin/cetakpdfoneinfraallkabkota',$data);                    
                }
                elseif($fil_jenisinfra != 'Semua' && $fil_kabkota != 'Semua')
                {
                    $namakabkota = $this->M_wilayah->get_by_id($fil_kabkota);
                    $data['kabkota'] = strtoupper($namakabkota->nama);
                    $data['infrastruktur'] = strtoupper($fil_jenisinfra);
                    $data['pengaduan'] = $this->M_pengaduan->get_filter($fil_jenisinfra,$fil_kabkota,$fil_status,$fil_tglawal,$fil_tglakhir);
                    $this->load->view('admin/cetakpdfoneinfraonekabkota',$data);                    
                }
            }
            else
            {
                redirect('admin/download');
            }

            
        }
        else
        {
           redirect('admin/download');
        }
    }

    public function cetakexcel($fil_jenisinfra,$fil_kabkota,$fil_tglawal,$fil_tglakhir,$range,$fil_status,$namakabkota, $namainfrastruktur)
    {

        if($fil_jenisinfra == 'Semua' && $fil_kabkota == 'Semua')
        {

            $data['pengaduan'] = $this->M_pengaduan->get_filter(NULL,NULL,$fil_status,$fil_tglawal,$fil_tglakhir);

        }

        elseif($fil_jenisinfra == 'Semua' && $fil_kabkota != 'Semua')
        {
            $data['pengaduan'] = $this->M_pengaduan->get_filter(NULL,$fil_kabkota,$fil_status,$fil_tglawal,$fil_tglakhir);

        }
        elseif($fil_jenisinfra != 'Semua' && $fil_kabkota == 'Semua')
        {
            $data['pengaduan'] = $this->M_pengaduan->get_filter($fil_jenisinfra,NULL,$fil_status,$fil_tglawal,$fil_tglakhir);

        }
        elseif($fil_jenisinfra != 'Semua' && $fil_kabkota != 'Semua')
        {
            $data['pengaduan'] = $this->M_pengaduan->get_filter($fil_jenisinfra,$fil_kabkota,$fil_status,$fil_tglawal,$fil_tglakhir);
        }


        $data['kabkota'] = $namakabkota;
        $data['infrastruktur'] = $namainfrastruktur;
        $data['range'] = strtoupper($range);
        $data['status'] = strtoupper($fil_status);
        $data['filename'] = "DATA LAPORAN PENGADUAN ".$namainfrastruktur." ".$namakabkota." ".$range;              
        $this->load->view('admin/cetakexcel',$data);
    }

}
