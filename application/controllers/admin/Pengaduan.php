<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengaduan');
    }

    public function index()
    {
        $data['pengaduan'] = $this->M_pengaduan->get_all();
        $data['_view'] = 'admin/pengaduan';
        $this->load->view('admin/layout', $data);
    } 

    public function insertdummy($jumlah)
    {

        for ($i = 1; $i <= $jumlah; $i++) {
            $data = array(
                'kodelaporan' => 'KODE' . $i,
                'tgl_laporan' => '2021-10-26',
                'nama_pelapor' => 'namapelapor' . $i,
                'nik' => '92154002' . $i,
                'alamat_pelapor' => 'Jalan tanpa lelah',
                'kab_pelapor' => '92.01',
                'kec_pelapor' => '92.01.01',
                'des_pelapor' => '92.01.01.01',
                'no_hp' => '0812555421',
                'email' => 'nobarto@gmail.com',
                'isi_laporan' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.',
                'infrastruktur' => 'Jalan',
                'nama_ruasjalan' => 'Jembatan Trans Nusa Cendana',
                'lokasi_kabkota' => 'Timor Tengah Utara',
                'lokasi_distrik' => 'Manokwari Barat',
                'latitude' => '-6855224',
                'longitude' => '-58785',
                'status' => 'Menunggu',
            );

            $this->db->insert('pengaduan', $data);
        }

        json_encode(array('status' => 'input data dummy berhasil'));
    }
}
