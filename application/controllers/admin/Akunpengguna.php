<?php defined('BASEPATH') or exit('No direct script access allowed');

class Akunpengguna extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['ion_auth', 'form_validation']);
    }

    public function index()
    {

        $data['users'] = $this->ion_auth->users()->result();
        $data['_view'] = 'admin/akunpengguna';
        $this->load->view('admin/layout', $data);
    }
}
