<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_siswa');
	}
	public function index(){
		$data['judul_browser']='Data Siswa | User';
		$this->load->view('tampil_siswa',$data);
	}
	public function tampil_data()
	{
		$data=$this->M_siswa->ambil_data();
		echo json_encode($data);
	}

	public function simpan()
	{
		$data=$this->M_siswa->simpan_data();
		echo json_encode($data);
	}
	public function update()
	{
		$data=$this->M_siswa->ubah_data();
		echo json_encode($data);
	}

	public function hapus()
	{
		$data=$this->M_siswa->hapus_data();
		echo json_encode($data);
	}
}