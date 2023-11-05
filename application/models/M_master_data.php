<?php
class M_master_data extends CI_Model{
  // Fungsi Lihat Data
  function lihat(){
    $query=$this->db->query("SELECT * FROM harga ORDER BY id_harga ASC");
    return $query->result();
  }
  // Fungsi Hapus Data
  function delete_master($where, $id_harga){
    // $query=$this->db->query("delete from user where induk='$induk'");
    $this->db->where($where);
    $this->db->delete($id_harga);
  }
  // Fungsi Simpan Tambah DataMaster
  function simpan_datamaster(){
    $simpan_data=array(
                        'nama_kendaraan' =>$this->input->post('nama_kendaraan'),
                        'harga'          =>$this->input->post('harga'),              
                      );

    $simpan=$this->db->insert('harga',$simpan_data);
    return $simpan;
  }

}