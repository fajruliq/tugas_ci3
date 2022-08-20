<?php
class StockBarang extends CI_Controller
{
    //pemanggilan Db dengan controler
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tb_stock');
    }
    public function index()
    {
        $data['title'] = 'Data Barang Stock';
        $data['barangstock'] = $this->tb_stock->get_tb_stock();

        $this->load->view('themplate/header', $data);
        $this->load->view('themplate/sidebar');
        $this->load->view('admin/barangstock', $data);
        $this->load->view('themplate/footer');
    }
    

    public function tambah_stockbarang()
    {

        $data['title'] = 'Data Barang Stock';

        $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stockbarang', 'Stock Barang', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('themplate/header', $data);
            $this->load->view('themplate/sidebar');
            $this->load->view('admin/tambah_stckbrg', $data);
            $this->load->view('themplate/footer');
        } else {

            $this->tb_stock->tambahDataStock();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('stockbarang');
        }
    }
    public function update_stockbarang($id)
    {

        $data['title'] = 'Update Barang keluar';
        $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stockbarang', 'Stock Barang', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('themplate/header', $data);
            $this->load->view('themplate/sidebar');
            $this->load->view('admin/update_stckbrg', $data);
            $this->load->view('themplate/footer');
        } else {

            $this->tb_stock->updateStockBarang($id);
            $this->session->set_flashdata('flash', 'di Update');
            redirect('stockbarang');
        }
    }

    public function hapus_stockbarang($id)
    {
        $this->tb_stock-> hapusDataStock($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('stockbarang');
    }

}
