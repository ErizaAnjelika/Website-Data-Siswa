<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}
	
	public function index()
	{
		$data['judul_browser']='Data Mahasiswa | Log In';
		$this->load->view('vlogin',$data);
	}

	public function cek_login(){
		$cek_admin=$this->M_user->cek_admin();
		if ($cek_admin) {
				$data['judul_browser']='Data Siswa | Log In';
				$this->load->view("swal",$data);
				$this->session->set_userdata('masuk',TRUE);
				$this->session->set_userdata('nama',$cek_admin->username);
				$this->session->set_userdata('level','administrator');
			}else{
				$data['judul_browser']='Admin Management | Log In';
				$this->load->view('gagal',$data);
			}
		}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

