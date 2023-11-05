<?php
class M_beranda extends CI_Model{
  // Fungsi Hitung Jumlah Transaksi
  public function hitungJumlahTransaksi() {   
    $query = $this->db->get('transaksi');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
  }

  // Fungsi Hitung Jumlah Pendapatan
  public function hitungJumlahPendapatan() {
    $this->db->select_sum('total');
    $query = $this->db->get('transaksi');
    if($query->num_rows()>0)
    {
      return $query->row()->total;
    }
    else
    {
      return 0;
    }
}
}