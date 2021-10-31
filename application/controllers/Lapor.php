<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lapor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengaduan');
        // $this->load->model('M_setting');
        // $this->load->model('Ion_auth_model');
        $this->load->library('recaptcha'); 

    }

    function index()
    {
    	$query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 5 AND LEFT(kode,2) = '92' AND (RIGHT(kode,2) = '02' OR RIGHT(kode,2) = '71')");
    	
    	//generate kode laporan
    	$last_idlap = $this->M_pengaduan->get_lastrow();
        if ($last_idlap->num_rows > 0) {
            $idlap = (int)$last_idlap->row()->id + 1;
        } else {
            $idlap = 1;
        }
        $kodelaporan = date("YmdHis") . $idlap;

        $data['kodelaporan'] = $kodelaporan;
    	$data['wil_kab'] = $query->result();
        $data['recaptcha'] = $this->recaptcha->create_box();
    	$this->load->view('public/index',$data);
    }

    function savelaporan()
    {
    	$params = array(
    		'kodelaporan' => $this->input->post('kodelaporan'),
	    	'tgl_laporan' => date("Y-m-d H:i:s")
	    		,
	    	'nama_pelapor' => $this->input->post('nama_pelapor'),
	    	'nik' => $this->input->post('nik'),
	    	'alamat_pelapor' => $this->input->post('alamat_pelapor'),
	    	'kab_pelapor' => $this->input->post('kab_pelapor'),
	    	'kec_pelapor' => $this->input->post('kec_pelapor'),
	    	'des_pelapor' => $this->input->post('des_pelapor'),
	    	'no_hp' => $this->input->post('no_hp'),
	    	'email' => $this->input->post('email'),
	    	'isi_laporan' => $this->input->post('isi_laporan'),
	    	'infrastruktur' => $this->input->post('infrastruktur'),
	    	'nama_ruasjalan' => $this->input->post('nama_ruasjalan'),
	    	'lokasi_kabkota' => $this->input->post('lokasi_kabkota'),
	    	'lokasi_distrik' => $this->input->post('lokasi_distrik'),
	    	'latitude' => $this->input->post('latitude'),
	    	'longitude' => $this->input->post('longitude'),
	    	'status' => 'Menunggu',
    	);

    	 $laporan_id = $this->M_pengaduan->add($params);
    	 echo json_encode(array('status' => TRUE));

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

    function uploadktp()
    {

        $config['upload_path']   = FCPATH.'/upload/ktp/';
        $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('filektp')){
            $token=$this->input->post('token_foto');
            $kodelaporan=$this->input->post('kodelaporan');
            $file_name=$this->upload->data('file_name');
            $kategori='ktp';
            $uploaded_on=date("Y-m-d H:i:s");
            $this->db->insert('upload',array('nama_file'=>$file_name,'token'=>$token,'kategori'=>$kategori,'uploaded_on'=>$uploaded_on,'kodelaporan'=>$kodelaporan));
        }
    }


    function uploaddokumentasi1()
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

    function uploaddokumentasi2()
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

    function uploaddokumentasi3()
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
    function cobamap()
    {
		$this->load->view('map');
    }
}