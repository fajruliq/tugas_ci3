<?php
class BarangKeluar extends CI_Controller
{
    //pemanggilan Db dengan controler
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tb_barangkeluar');
    }
    public function index()
    {
        $data['title'] = 'Data Barang keluar';
        $data['barangkeluar'] = $this->tb_barangkeluar->get_tb_barangkeluar();

        $this->load->view('themplate/header', $data);
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/barangkeluar', $data);
        $this->load->view('themplate/footer');
    }
    

    public function tambah_barangkeluar()
    {

        $data['title'] = 'Data Barang keluar';

        $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stockbarang', 'Stock Barang', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('themplate/header', $data);
            $this->load->view('themplate/sidebar');
            $this->load->view('admin/tambah_brgkeluar', $data);
            $this->load->view('themplate/footer');
        } else {

            $this->tb_barangkeluar->tambahDataKeluar();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('barangkeluar');
        }
    }
    public function update_barangkeluar($id)
    {

        $data['title'] = 'Update Barang keluar';
        $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stockbarang', 'Stock Barang', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('themplate/header', $data);
            $this->load->view('themplate/sidebar');
            $this->load->view('admin/update_brgkeluar', $data);
            $this->load->view('themplate/footer');
        } else {

            $this->tb_barangkeluar->updateDataKeluar($id);
            $this->session->set_flashdata('flash', 'di Update');
            redirect('barangkeluar');
        }
    }

    public function hapus_barangkeluar($id)
    {
        $this->tb_barangkeluar->hapusDataKeluar($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('barangkeluar');
    }

}
