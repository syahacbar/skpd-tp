<?php defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengaduan');

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
        $infrastruktur = $this->input->post('pilihinfra', TRUE);
        $kabupaten = $this->input->post('kabupaten', TRUE);
        $startdate = $this->input->post('startdate', TRUE);
        $todate = $this->input->post('todate', TRUE);
        $dok = $this->input->post('pilihangambar',TRUE);
        $formatcetak = $this->input->post('formatcetak',TRUE);
        $status = $this->input->post('statuslaporan',TRUE);
        
        $data['pengaduan'] = $this->M_pengaduan->get_all();

        $this->load->view('admin/cetakpdfall',$data);


        
        if ($formatcetak == 'cetakexcel')
        {
            if($kabupaten == NULL || $kabupaten == 'semua')
            {            
                $namakab = 'Semua Kab/Kota';
            } else {
                $namakab = $this->M_pengaduan->get_kabkota($kabupaten)->nama;
            }

            if($infrastruktur == NULL || $infrastruktur == 'semua')
            {
                $namainf = 'Semua Infrastruktur';
            } else {
                 $namainf = $infrastruktur;
            }
            $this->cetakexcel($infrastruktur,$kabupaten,$startdate,$todate,$range,$status,$namakab,$namainf);

        } elseif ($formatcetak == 'cetakpdf')
        { 
            $data['pengaduan'] = $this->M_pengaduan->get_cetak_pengaduan($infrastruktur,$kabupaten,$startdate,$todate,NULL,NULL,NULL,'tgl_laporan','DESC',$status);
            if($infrastruktur != NULL && $kabupaten != NULL && $status != NULL)
            {
                if ($infrastruktur == 'semua' && $kabupaten == 'semua')
                {
                    $data['range'] = $range;
                    if($dok == '1')
                    {
                        $this->load->view('admin/cetakpdfallinfraallkabkota',$data);
                    } elseif ($dok == '0')
                    {
                        $this->load->view('admin/cetakpdfallinfraallkabkotanodok',$data);
                    }
                    
                } elseif ($infrastruktur == 'semua' && $kabupaten != 'semua') {
                    $data['kabupaten'] = $this->M_pengaduan->get_kabkota($kabupaten)->nama;
                    $data['range'] = $range;

                    if($dok == '1')
                    {
                        $this->load->view('admin/cetakpdfallinfraonekabkota',$data);
                    } elseif ($dok == '0')
                    {
                        $this->load->view('admin/cetakpdfallinfraonekabkotanodok',$data);
                    }
                } elseif ($infrastruktur != 'semua' && $kabupaten == 'semua') {
                    $data['infrastruktur'] = $infrastruktur;
                    $data['range'] = $range;

                    if($dok == '1')
                    {
                        $this->load->view('admin/cetakpdfoneinfraallkabkota',$data);
                    } elseif ($dok == '0')
                    {
                        $this->load->view('admin/cetakpdfoneinfraallkabkota ',$data);
                    }
                    
                } elseif ($infrastruktur != 'semua' && $kabupaten != 'semua') {
                    $data['infrastruktur'] = $infrastruktur;
                    $data['range'] = $this->M_pengaduan->get_kabkota($kabupaten)->nama;
                    $data['kabupaten'] = $range;

                    if($dok == '1')
                    {
                        $this->load->view('admin/cetakpdfoneinfraonekabkota',$data);
                    } elseif ($dok == '0')
                    {
                        $this->load->view('admin/cetakpdfoneinfraonekabkotanodok',$data);
                    }
                    
                } 
            }
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
