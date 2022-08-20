<?php
// Dosen
class Tb_stock extends CI_Model
{
    public function get_tb_stock()
    {
        // $data = $this->db->query("SELECT * FROM mhs");
        // return $data->result_array();
        return $this->db->get('tb_stock')->result_array();
    }

    public function tambahDataStock()
    {
        $data = [
            "id" => $this->input->POST('id', true),
            "nama_barang" => $this->input->POST('namabarang', true),
            "stock_barang" => $this->input->POST('stockbarang', true)
           
        ];
        $this->db->insert('tb_stock', $data);
    }

    public function hapusDataStock($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_stock');
    }
}
