<?php
class M_laporan extends CI_Model{
  // Fungsi Lihat Data
  function lihat(){
    $query=$this->db->query("SELECT * FROM transaksi ORDER BY id_transaksi ASC");
    return $query->result();
  }
  // Fungsi Hapus Data
  function delete_user($where, $id_transaksi){
    // $query=$this->db->query("delete from user where induk='$induk'");
    $this->db->where($where);
    $this->db->delete($id_transaksi);
  }
}