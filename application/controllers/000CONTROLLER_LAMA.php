<?php
class C_cuci extends CI_Controller{

  function _Contruct(){
    parent:: _contruct();
  }
  // Fungsi login
  function login(){
    $data['judul']='Entry Data Transaksi';
    $this->load->view('login',$data);
  }
  // Fungsi Beranda
  function beranda(){
    $this->load->model('M_beranda');
    $data['total_transaksi'] = $this->M_beranda->hitungJumlahTransaksi();
    $data['total_income']    = $this->M_beranda->hitungJumlahPendapatan();
    $this->load->view('beranda/index', $data);
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
    redirect('C_cuci/laporan');
  }
  // Fungsi Data Master
  function data_master(){
    $this->load->model('M_master_data');
    $data['master']=$this->M_master_data->lihat();
    $this->load->view('Data_Master/index', $data);
  }
  // Fungsi Delete Master
  function delete_master($id_harga){
    $this->load->model('M_master_data');
    $where = array('id_harga'=>$id_harga);
    $this->M_master_data->delete_master($where, harga);
    redirect('C_cuci/data_master');
  }

}