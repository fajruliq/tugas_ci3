<?php
//  Dosen
class Tb_barangkeluar extends CI_Model
{
    public function get_tb_barangkeluar()
    {
        // $data = $this->db->query("SELECT * FROM mhs");
        // return $data->result_array();
        return $this->db->get('tb_barangkeluar')->result_array();
    }

    public function tambahDatakeluar()
    {
        $data = [
            "id" => $this->input->POST('id', true),
            "nama_barang" => $this->input->POST('namabarang', true),
            "stock_barang" => $this->input->POST('stockbarang', true)
           
        ];
        $this->db->insert('tb_barangkeluar', $data);
    }

    public function hapusDatakeluar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_barangkeluar');
    }
}