<?php
class C_master_data extends CI_Controller{

  function _Contruct(){
    parent:: _contruct();
  }
  // Fungsi Lihat Data Master
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
    redirect('C_master_data/data_master');
  }
  // Fungsi Input DataMaster
  function input_master(){
    $this->load->view('Data_Master/tambah_data');
  }
  // Fungsi simpan
  function simpan_datamaster(){
    $this->load->model('M_master_data');
    $this->M_master_data->simpan_datamaster();
    $data['notifikasi']='Data Master Tersimpan';
    $this->load->view('Data_Master/notifikasi',$data);
  }
}