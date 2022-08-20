<?php
//  Dosen
class Tb_barangkeluar extends CI_Model
{
    public function get_tb_barangKeluar()
    {
        // $data = $this->db->query("SELECT * FROM mhs");
        // return $data->result_array();
        return $this->db->get('tb_barangkeluar')->result_array();
    }

    public function tambahDataKeluar()
    {
        $data = [
            "id" => $this->input->POST('id', true),
            "nama_barang" => $this->input->POST('namabarang', true),
            "stock_barang" => $this->input->POST('stockbarang', true)
           
        ];
        $this->db->insert('tb_barangkeluar', $data);
    }

    public function hapusDataKeluar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_barangkeluar');
    }
    public function updateDataKeluar($id) {
        $data = [
                   "id" => $id,
                   "nama_barang" => $this->input->POST('namabarang', true),
                   "stock_barang" => $this->input->POST('stockbarang', true)
                  
               ];
       
           $this->db->where('id', $data['id']);
           $this->db->update('tb_barangkeluar', $data);
       
           return true;
       }
}