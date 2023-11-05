<?php
class C_transaksi extends CI_Controller{

  function _Contruct(){
    parent:: _contruct();
  }
  // Fungsi Transaksi/Input Data
  function transaksi(){
    $data['tanggal']=date_default_timezone_set('Asia/Jakarta');
    $data['tanggal']=date("H:i:s");
    $this->load->model('M_transaksi');
    $data['kendaraan']=$this->M_transaksi->jenis_kendaraan();
    $this->load->view('transaksi/index', $data);
  }
  // Fungsi simpan
  function simpan_transaksi(){
    $this->load->model('M_transaksi');
    $this->M_transaksi->simpan_transaksi();
    $data['notifikasi']='Transaksi Tersimpan';
    $this->load->view('transaksi/bukti_transaksi',$data);
  }
}