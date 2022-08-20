<?php
class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tb_stock');
    }
    public function index()
    {

        $data['dosen'] = $this->d_dosen->get_dsn();
        $data['title'] = 'Data Dosen';
        $this->load->view('themplate/header', $data);
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/dosen', $data);
        $this->load->view('themplate/footer');
    }
}
