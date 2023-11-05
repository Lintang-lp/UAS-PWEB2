<?php 
class C_login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
  //Fungsi Tampil Halaman Login  
	function index(){
		$this->load->view('login');
	}
  // Fungsi Form Login
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
      // Sesi
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
      // Mengirim Sesi
			$this->session->set_userdata($data_session);
      redirect('C_beranda/beranda');
 
		}else{
			echo "Username dan password salah !";
		}
	}
  // Fungsi Logout Akun
	function logout(){
		$this->session->sess_destroy();
		// redirect(base_url('C_login'));
    redirect('C_login');
	}
}