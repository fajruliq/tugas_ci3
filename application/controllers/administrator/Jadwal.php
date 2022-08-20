<?php
class Jadwal extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Jadwal Kuliah';
        $this->load->view('themplate/header', $data);
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/jadwal');
        $this->load->view('themplate/footer');
    }
}
