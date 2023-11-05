<?php
class C_laporan extends CI_Controller{

  function _Contruct(){
    parent:: _contruct();
  }
  // Fungsi laporan
  function laporan(){
    $this->load->model('M_laporan');
    $data['daftar_transaksi']=$this->M_laporan->lihat();
    $this->load->view('laporan/index', $data);
  }
  // Fungsi Delete Transaksi
  function delete_user($id_transaksi){
    $this->load->model('M_laporan');
    $where = array('id_transaksi'=>$id_transaksi);
    $this->M_laporan->delete_user($where, transaksi);
    redirect('C_laporan/laporan');
  }
}