<?php
class C_beranda extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
      redirect('C_login');
		}
	}
  // Fungsi Beranda
  function beranda(){
    $this->load->model('M_beranda');
    $data['total_transaksi'] = $this->M_beranda->hitungJumlahTransaksi();
    $data['total_income']    = $this->M_beranda->hitungJumlahPendapatan();
    $this->load->view('beranda/index', $data);
  }
}