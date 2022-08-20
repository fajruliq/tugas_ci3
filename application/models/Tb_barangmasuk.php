<?php
// MAhasiswa
class Tb_barangmasuk extends CI_Model
{
    public function get_tb_barangmasuk()
    {
        // $data = $this->db->query("SELECT * FROM mhs");
        // return $data->result_array();
        return $this->db->get('tb_barangmasuk')->result_array();
    }

    public function tambahDataMasukk()
    {
        $data = [
            "nama_barang" => $this->input->POST('namabarang', true),
            "stock_barang" => $this->input->POST('stockbarang', true)
           
        ];
        $this->db->insert('tb_barangmasuk', $data);
    }

    public function hapusDataMasukk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_barangmasuk');
    }

public function updateDataMasuk($id) {
 $data = [
            "id" => $id,
            "nama_barang" => $this->input->POST('namabarang', true),
            "stock_barang" => $this->input->POST('stockbarang', true)
           
        ];

    $this->db->where('id', $data['id']);
    $this->db->update('tb_barangmasuk', $data);

    return true;
}
}