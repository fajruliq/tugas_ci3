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
        $data['title'] = 'Data Barang Masuk';
        $data['barangmasuk'] = $this->tb_barangkeluar->get_tb_barangkeluar();

        $this->load->view('themplate/header', $data);
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/barangkeluar', $data);
        $this->load->view('themplate/footer');
    }
    

    public function tambah_barangmasuk()
    {

        $data['title'] = 'Data Barang Masuk';

        $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stockbarang', 'Stock Barang', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('themplate/header', $data);
            $this->load->view('themplate/sidebar');
            $this->load->view('admin/tambah_brgmasuk', $data);
            $this->load->view('themplate/footer');
        } else {

            $this->tb_barangkeluar->tambahDataMasukk();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('/');
        }
    }
    public function update_barangmasuk($id)
    {

        $data['title'] = 'Update Barang Masuk';
        $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stockbarang', 'Stock Barang', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('themplate/header', $data);
            $this->load->view('themplate/sidebar');
            $this->load->view('admin/update_brgmasuk', $data);
            $this->load->view('themplate/footer');
        } else {

            $this->tb_barangkeluar->updateDataMasuk($id);
            $this->session->set_flashdata('flash', 'di Update');
            redirect('/');
        }
    }

    public function hapus_barangmasuk($id)
    {
        $this->tb_barangkeluar->hapusDataMasukk($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('/');
    }

}
