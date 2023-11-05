<?php
class M_transaksi extends CI_Model{
  // Fungsi Simpan
  function simpan_transaksi(){
    $tanggal = date("Y-m-d");
    $username= $this->session->userdata("nama");
    $simpan_data=array(
                        'no_nota'        =>$this->input->post('no_nota'),
                        'nama_pelanggan' =>$this->input->post('nama_pelanggan'),
                        'no_pol'         =>$this->input->post('no_pol'),
                        'jenis'          =>$this->input->post('jenis'),
                        'harga'          =>$this->input->post('harga'),
                        'bayar'          =>$this->input->post('bayar'),
                        'kembali'        =>$this->input->post('kembali'),
                        'total'          =>$this->input->post('harga'),
                        'tanggal'        =>$tanggal,
                        'id_admin'       =>$username,                  
                        // 'id_admin'       =>$this->input->post('id_admin'),                  
                      );

    $simpan=$this->db->insert('transaksi',$simpan_data);
    return $simpan;
  }
  // Fungsi Data Master
  function jenis_kendaraan(){
    $query=$this->db->query("SELECT * FROM harga ORDER BY id_harga ASC");
    return $query->result();
  }
  // Fungsi Bukti Transaksi
  function bukti_transaksi(){
    $query=$this->db->query("SELECT * FROM transaksi");
    return $query->result();
  }
}