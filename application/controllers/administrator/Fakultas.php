<?php
class Fakultas extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Fakultas';
        $this->load->view('themplate/header', $data);
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/fakultas');
        $this->load->view('themplate/footer');
    }
}
