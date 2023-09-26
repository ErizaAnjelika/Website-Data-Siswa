<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_siswa');
	}

	public function index(){
		$data['judul_browser']='Data Siswa | Chart';
		$data['tahun'] = $this->db->query('SELECT distinct(year(tanggal_lahir)) as tahun FROM tbl_siswa group by tanggal_lahir ORDER BY tanggal_lahir ASC')->result();
		$arr = $this->db->query('SELECT distinct(year(tanggal_lahir)) as tahun FROM tbl_siswa group by tanggal_lahir ORDER BY tanggal_lahir ASC')->result();

		foreach ($arr as $a ) {
			 $hasil[] = $this->db->where('YEAR(tanggal_lahir)',$a->tahun)->get('tbl_siswa')->num_rows();

			 //echo $data['hasil'];
		}

		$data['hasil'] = $hasil;
		$this->load->view('vchart', $data);
	}
}