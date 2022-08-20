<?php
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tb_barangmasuk');
    }

    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->tb_barangmasuk->get_tb_barangmasuk();

        $this->load->view('themplate/header', $data);
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/mhs', $data);
        $this->load->view('themplate/footer');
    }


    public function tambah_mhs()
    {

        $data['title'] = 'Data Mahasiswa';

        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('themplate/header', $data);
            $this->load->view('themplate/sidebar');
            $this->load->view('admin/tambah_mhs', $data);
            $this->load->view('themplate/footer');
        } else {

            $this->m_mhs->tambahDataMhs();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('administrator/mahasiswa');
        }
    }

    public function hapus_mhs($id)
    {
        $this->m_mhs->hapusDataMhs($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('administrator/mahasiswa');
    }
}
