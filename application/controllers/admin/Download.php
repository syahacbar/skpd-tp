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

            if($fil_formatcetak == "cetakexcel")
            {

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

    function cetakpdfallinfra()
    {
        $this->load->library('Pdf');
        $data['pengaduan'] = $this->M_pengaduan->get_all();
        $this->load->view('admin/cetakpdfallinfra',$data);

    }

    function cetakpdfallkabkota()
    {
        $this->load->library('Pdf');    
        $data['pengaduan'] = $this->M_pengaduan->get_all();
        $this->load->view('admin/cetakpdfallkabkota',$data);

    }


    function cetakpdfallinfraallkabkota()
    {
        $this->load->library('Pdf');
        $data['pengaduan'] = $this->M_pengaduan->get_all();
        $this->load->view('admin/cetakpdfallinfraallkabkota',$data);

    }


    function cetakpdfallinfraonekabkota()
    {
        $this->load->library('Pdf');
        $data['pengaduan'] = $this->M_pengaduan->get_all();
        $this->load->view('admin/cetakpdfallinfraonekabkota',$data);

    }


    function cetakpdfoneinfraallkabkota()
    {
        $this->load->library('Pdf');
        $data['pengaduan'] = $this->M_pengaduan->get_all();
        $this->load->view('admin/cetakpdfoneinfraallkabkota',$data);

    }


    function cetakpdfoneinfraonekabkota()
    {
        $this->load->library('Pdf');
        $data['pengaduan'] = $this->M_pengaduan->get_all();
        $this->load->view('admin/cetakpdfoneinfraonekabkota',$data);

    }


    function kabkota($kabkota=NULL)
    {
        $get_kab = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 5 AND kode LIKE '92%' ORDER BY kode ASC");
        
        $data['pengaduan'] = $this->M_pengaduan->get_all_pengaduan_bykabkota($kabkota,NULL,NULL,NULL,NULL,NULL,'1');
        $data['status'] = '1';

        if ($kabkota==NULL)
        {
            $data['kabkota'] = 'Semua Kab/Kota';
            $data['kodekab'] = '';
        } else {
            $data['kabkota'] = $this->M_pengaduan->get_kabkota($kabkota)->nama;
            $data['kodekab'] = $kabkota;
        }
            
        $data['_view'] = 'admin/download';
        $data['download'] = $get_kab->result();
        $this->load->view('admin/download',$data);
    }

    function download()
    {
        $get_kab = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 5 AND kode LIKE '92%' ORDER BY kode ASC");
        $data['download'] = $get_kab->result();
        $data['_view'] = 'admin/download';
        $this->load->view('admin/download',$data);
    }

}
