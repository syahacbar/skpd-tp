<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengaduan');
        $this->load->model(['M_pengaduan','M_wilayah']);

    }


    public function index()
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 5 AND LEFT(kode,2) = '92' AND (RIGHT(kode,2) = '02' OR RIGHT(kode,2) = '71')");

        $data['kabupaten'] = $query->result();
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


//set nama tabel yang akan kita tampilkan datanya
    var $table = 'pengaduan';
    //set kolom order, kolom pertama saya null untuk kolom edit dan hapus
    var $column_order = array(NULL,'namalengkap','namalengkap');

    var $column_search = array('nama');
    // default order 
    var $order = array('idpengaduan' => 'ASC');

    private function _get_datatables_query()
    {

        // $this->db->get
        $this->db->select("p.*");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.kab_pelapor) AS nama_kabpelapor");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.kec_pelapor) AS nama_kecpelapor");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.des_pelapor) AS nama_despelapor");
        // $this->db->select("(SELECT p1.namaprodi FROM prodi p1 WHERE p1.idprodi=tb.prodipilihan1) AS pilihan1, (SELECT p2.namaprodi FROM prodi p2 WHERE p2.idprodi=tb.prodipilihan2) AS pilihan2, (SELECT p3.namaprodi FROM prodi p3 WHERE p3.idprodi=tb.prodipilihan3) AS pilihan3");     

        // $this->db->select('*,(SELECT p1.namaprodi FROM prodi p1 WHERE p1.idprodi=tb.prodipilihan1) AS pilihan1, (SELECT p2.namaprodi FROM prodi p2 WHERE p2.idprodi=tb.prodipilihan2) AS pilihan2, (SELECT p3.namaprodi FROM prodi p3 WHERE p3.idprodi=tb.prodipilihan3) AS pilihan3');     
        // $this->db->from('users u');
        // $this->db->join('pengaduan tb', 'tb.username = u.username');

        //$this->db->group_start();
        
        if(isset($_POST['is_infrastruktur']) && $_POST['is_infrastruktur'] != "0") 
        {
            $this->db->where('infrastruktur',$_POST['is_infrastruktur']);
        }

        if(isset($_POST['is_lokasi_kabkota']) && $_POST['is_lokasi_kabkota'] != "0") 
        {
            // $this->db->group_start();
            $this->db->where('lokasi_kabkota',$_POST['lokasi_kabkota']);
            // $this->db->or_where('prodipilihan2',$_POST['is_prodi']);
            // $this->db->or_where('prodipilihan3',$_POST['is_prodi']);
            // $this->db->group_end();
           
        } 
        

        if(isset($_POST['is_status']) && $_POST['is_status'] != '0') 
        {
            $this->db->where('status',$_POST['is_status']);
        }

        $this->db->group_end();

        $i = 0;
        foreach ($this->column_search as $item) // loop kolom 
        {
            if ($this->input->post('search')['value']) // jika datatable mengirim POST untuk search
            {
                if ($i === 0) // looping pertama
                {
                    $this->db->group_start();
                    $this->db->like($item, $this->input->post('search')['value']);
                } else {
                    $this->db->or_like($item, $this->input->post('search')['value']);
                }
                if (count($this->column_search) - 1 == $i) //looping terakhir
                    $this->db->group_end();
            }
            $i++;
        }

        // jika datatable mengirim POST untuk order
        if ($this->input->post('order')) {
            $this->db->order_by($column_order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($this->input->post('length') != -1)
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

}
