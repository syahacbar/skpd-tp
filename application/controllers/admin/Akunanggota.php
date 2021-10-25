<?php defined('BASEPATH') or exit('No direct script access allowed');

class Akunanggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data['_view'] = 'admin/akunanggota';
        $this->load->view('admin/layout', $data);
    }
}
