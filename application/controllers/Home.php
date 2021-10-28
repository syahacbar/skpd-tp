<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_lapor');
        $this->load->model('M_setting');
        $this->load->library('recaptcha'); 
    }

    function index()
    {
        $recaptcha = $this->recaptcha->create_box();
        $get_kab = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 5 AND kode LIKE '92%' ORDER BY kode ASC");
        $data['kabupaten'] = $get_kab->result();

        $last_idlap = $this->M_lapor->get_lastrow();
        if ($last_idlap->num_rows > 0) {
            $idlap = (int)$last_idlap->row()->id + 1;
        } else {
            $idlap = 1;
        }
        $kodelaporan = date("YmdHis") . $idlap;

        $data['jum_lap_drainase'] = $this->M_lapor->get_infrastruktur('drainase')->num_rows();
        $data['jum_lap_jalan'] = $this->M_lapor->get_infrastruktur('jalan')->num_rows();
        $data['kodelaporan'] = $kodelaporan;
        // $data['_view'] = 'public/home';
        $data['recaptcha'] = $recaptcha;
        // $data['recaptcha2'] = $recaptcha;
        $data['_view'] = 'public/index';
        $this->load->view('public/index', $data);
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

    function add()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $is_valid = $this->recaptcha->is_valid();
        if ($this->form_validation->run() && $is_valid['success']) {
            $params = array(
                'tgl_laporan' => date("Y-m-d H:i:s"),
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
                'kodelaporan' => $this->input->post('kodelaporan'),
                'status' => 'Menunggu'
            );

            $pengaduan_id = $this->M_lapor->add_pengaduan($params);

            $nama_pelapor = $this->input->post('nama_pelapor');
            $nowapelapor = $this->input->post('no_hp');
            $nowakabid = $this->M_setting->get_nowa_kabid($this->input->post('lokasi_kabkota'))->phone;
            // $nowakabid = '085244146207';
            $kodelaporan = $this->input->post('kodelaporan');
            $distrik = $this->M_setting->get_wilayah($this->input->post('lokasi_distrik'));
            $kabupaten = $this->M_setting->get_wilayah($this->input->post('lokasi_kabkota'));
            $image = $this->M_setting->get_image($kodelaporan);
            $imageurl = base_url() . 'upload/dokumentasi/' . $image;
            $ruasjalan = $this->input->post('nama_ruasjalan');

            $this->wasendpelapor($nowapelapor, $nama_pelapor, $ruasjalan, $distrik, $kabupaten);
            $this->wasendkabid($nowakabid, $kodelaporan, $ruasjalan, $kabupaten, $distrik, $imageurl);
        }
    }


    function uploadktp()
    {
        $config['upload_path']   = FCPATH . '/upload/ktp/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('filektp')) {
            $token = $this->input->post('token_foto');
            $kodelaporan = $this->input->post('kodelaporan');
            $nama = $this->upload->data('file_name');
            $kategori = 'ktp';
            $uploaded_on = date("Y-m-d H:i:s");
            $this->db->insert('upload', array('nama_file' => $nama, 'token' => $token, 'kategori' => $kategori, 'uploaded_on' => $uploaded_on, 'kodelaporan' => $kodelaporan));
        }
    }

    function uploaddokumentasi1()
    {
        $config['upload_path']   = FCPATH . '/upload/dokumentasi/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('filedokumentasi1')) {
            $token = $this->input->post('token_dokumentasi');
            $kodelaporan = $this->input->post('kodelaporan');
            $nama = $this->upload->data('file_name');
            $kategori = 'dokumentasi1';
            $uploaded_on = date("Y-m-d H:i:s");
            $this->db->insert('upload', array('nama_file' => $nama, 'token' => $token, 'kategori' => $kategori, 'uploaded_on' => $uploaded_on, 'kodelaporan' => $kodelaporan));
        }
    }

    function uploaddokumentasi2()
    {
        $config['upload_path']   = FCPATH . '/upload/dokumentasi/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('filedokumentasi2')) {
            $token = $this->input->post('token_dokumentasi');
            $kodelaporan = $this->input->post('kodelaporan');
            $nama = $this->upload->data('file_name');
            $kategori = 'dokumentasi2';
            $uploaded_on = date("Y-m-d H:i:s");
            $this->db->insert('upload', array('nama_file' => $nama, 'token' => $token, 'kategori' => $kategori, 'uploaded_on' => $uploaded_on, 'kodelaporan' => $kodelaporan));
        }
    }

    function uploaddokumentasi3()
    {
        $config['upload_path']   = FCPATH . '/upload/dokumentasi/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('filedokumentasi3')) {
            $token = $this->input->post('token_dokumentasi');
            $kodelaporan = $this->input->post('kodelaporan');
            $nama = $this->upload->data('file_name');
            $kategori = 'dokumentasi3';
            $uploaded_on = date("Y-m-d H:i:s");
            $this->db->insert('upload', array('nama_file' => $nama, 'token' => $token, 'kategori' => $kategori, 'uploaded_on' => $uploaded_on, 'kodelaporan' => $kodelaporan));
        }
    }

    function wasendpelapor($nowapelapor, $nama, $ruasjalan, $distrik, $kabupaten)
    {
        $setting = $this->M_setting->list_setting();
        $userkey = $setting->userkey;
        $passkey = $setting->passkey;
        $telepon = $nowapelapor;
        $message = 'Hai *' . $nama . '*, ' . PHP_EOL . 'Laporan Anda Tentang Ruas Jalan *' . $ruasjalan . '* di Distrik *' . strtoupper($distrik) . ' ' . $kabupaten . '* telah kami terima dan akan diverifikasi lebih lanjut. ' . PHP_EOL . ' ' . PHP_EOL . 'Terima Kasih. | Sisikat.com' . PHP_EOL . ' ' . PHP_EOL . '*-Don\'t Reply!-*';;
        $url = 'https://console.zenziva.net/wareguler/api/sendWA/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'to' => $telepon,
            'message' => $message
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);
    }

    function wasendkabid($nowakabid, $kodelap, $ruasjalan, $kabupaten, $distrik, $imageurl)
    {
        $setting = $this->M_setting->list_setting();
        $userkey = $setting->userkey;
        $passkey = $setting->passkey;
        $telepon = $nowakabid;
        $image_link =  $imageurl;
        $caption  = 'Yth. Kabid. Bina Marga *' . $kabupaten . '* ' . PHP_EOL . ' ' . PHP_EOL . 'Anda mendapatkan 1 laporan tentang Ruas Jalan *' . $ruasjalan . '* di Distrik *' . strtoupper($distrik) . '*.' . PHP_EOL . 'Silahkan masuk ke Sistem Informasi SISIKAT untuk melihat detail laporan.' . PHP_EOL . 'Kode: *' . $kodelap . '* ' . PHP_EOL . ' ' . PHP_EOL . 'Terima Kasih. | Sisikat.com' . PHP_EOL . ' ' . PHP_EOL . '*-Don\'t Reply!-*';
        $url = 'https://console.zenziva.net/wareguler/api/sendWAFile/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'to' => $telepon,
            'link' => $image_link,
            'caption' => $caption
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);
    }
}
