<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard Admin';
        $this->load->view('themplate/header', $data);
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/index');
        $this->load->view('themplate/footer');
    }
}
