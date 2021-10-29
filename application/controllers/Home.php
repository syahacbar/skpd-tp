<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
// <<<<<<< main
//     function __construct()
//     {
//         parent::__construct();
//         $this->load->database();
//         $this->load->helper(array('url','file'));
//         $this->load->model('M_pengaduan');
//         $this->load->model('M_setting');
//         $this->load->model('Ion_auth_model');
//         $this->load->library('recaptcha'); 

//     }

//     function index()
//     {

//         $data['_view'] = 'public/index';         
//         $this->load->view('public/index', $data);
//     }
// =======
//     // function __construct()
//     // {
//     //     parent::__construct();
//     //     $this->load->model('M_lapor');
//     //     $this->load->model('M_setting');
//     //     $this->load->library('recaptcha'); 
//     // }

//     // function index()
//     // {
//     //     $recaptcha = $this->recaptcha->create_box();
//     //     $get_kab = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 5 AND kode LIKE '92%' ORDER BY kode ASC");
//     //     $data['kabupaten'] = $get_kab->result();

//     //     $last_idlap = $this->M_lapor->get_lastrow();
//     //     if ($last_idlap->num_rows > 0) {
//     //         $idlap = (int)$last_idlap->row()->id + 1;
//     //     } else {
//     //         $idlap = 1;
//     //     }
//     //     $kodelaporan = date("YmdHis") . $idlap;

//     //     $data['jum_lap_drainase'] = $this->M_lapor->get_infrastruktur('drainase')->num_rows();
//     //     $data['jum_lap_jalan'] = $this->M_lapor->get_infrastruktur('jalan')->num_rows();
//     //     $data['kodelaporan'] = $kodelaporan;
//     //     // $data['_view'] = 'public/home';
//     //     $data['recaptcha'] = $recaptcha;
//     //     // $data['recaptcha2'] = $recaptcha;
//     //     $data['_view'] = 'public/index';
//     //     $this->load->view('public/index', $data);
//     // }
// >>>>>>> main


    function fotoktp()
    {

        $config['upload_path']   = FCPATH.'/upload/ktp/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('filektp')){
            $token=$this->input->post('token_foto');
            $kodelaporan=$this->input->post('kodelaporan');
            $nama=$this->upload->data('file_name');
            $kategori='ktp';
            $uploaded_on=date("Y-m-d H:i:s");
            $this->db->insert('upload',array('nama_file'=>$nama,'token'=>$token,'kategori'=>$kategori,'uploaded_on'=>$uploaded_on,'kodelaporan'=>$kodelaporan));
        }
    }


    function fotodoc1()
    {
            $config['upload_path']   = FCPATH.'/upload/dokumentasi/';
            $config['allowed_types'] = '*';
            $this->load->library('upload',$config);

            if($this->upload->do_upload('filedokumentasi1')){
                $token=$this->input->post('token_dokumentasi');
                $kodelaporan=$this->input->post('kodelaporan');
                $nama=$this->upload->data('file_name');
                $kategori='dokumentasi1';
                $uploaded_on=date("Y-m-d H:i:s");
                $this->db->insert('upload',array('nama_file'=>$nama,'token'=>$token,'kategori'=>$kategori,'uploaded_on'=>$uploaded_on,'kodelaporan'=>$kodelaporan));
            }

    }

    function fotodoc2()
    {
            $config['upload_path']   = FCPATH.'/upload/dokumentasi/';
            $config['allowed_types'] = '*';
            $this->load->library('upload',$config);

            if($this->upload->do_upload('filedokumentasi2')){
                $token=$this->input->post('token_dokumentasi');
                $kodelaporan=$this->input->post('kodelaporan');
                $nama=$this->upload->data('file_name');
                $kategori='dokumentasi2';
                $uploaded_on=date("Y-m-d H:i:s");
                $this->db->insert('upload',array('nama_file'=>$nama,'token'=>$token,'kategori'=>$kategori,'uploaded_on'=>$uploaded_on,'kodelaporan'=>$kodelaporan));
            }

    }

    function fotodoc3()
    {
            $config['upload_path']   = FCPATH.'/upload/dokumentasi/';
            $config['allowed_types'] = '*';
            $this->load->library('upload',$config);

            if($this->upload->do_upload('filedokumentasi3')){
                $token=$this->input->post('token_dokumentasi');
                $kodelaporan=$this->input->post('kodelaporan');
                $nama=$this->upload->data('file_name');
                $kategori='dokumentasi3';
                $uploaded_on=date("Y-m-d H:i:s");
                $this->db->insert('upload',array('nama_file'=>$nama,'token'=>$token,'kategori'=>$kategori,'uploaded_on'=>$uploaded_on,'kodelaporan'=>$kodelaporan));
            }

    }


    function add_ajax_kec($id)
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 8 AND LEFT(kode,5) = '$id' ORDER BY kode ASC");
        $data = "<option value=''> - Pilih Kecamatan/Distrik - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->kode . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_des($id)
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 13 AND LEFT(kode,8) = '$id' ORDER BY kode ASC");
        $data = "<option value=''> - Pilih Kelurahan/Desa - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->kode . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }


}
