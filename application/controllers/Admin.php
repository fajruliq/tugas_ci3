<?php
class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->view('themplate/header');
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/index');
        $this->load->view('themplate/footer');
    }
    public function mhs()
    {
        $this->load->model('tb_barangmasuk');
        $data['mahasiswa'] = $this->m_mhs->get_mhs();

        $this->load->view('themplate/header');
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/mhs', $data);
        $this->load->view('template/footer');
    }
    public function dosen()
    {
        $this->load->view('themplate/header');
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/dosen');
        $this->load->view('themplate/footer');
    }
    public function jadwal()
    {
        $this->load->view('themplate/header');
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/jadwal');
        $this->load->view('themplate/footer');
    }
    public function fakultas()
    {
        $this->load->view('themplate/header');
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/fakultas');
        $this->load->view('themplate/footer');
    }
}
