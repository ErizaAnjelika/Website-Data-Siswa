<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function cek_admin(){
		$user=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$pass=md5(htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));

		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$hasil=$this->db->get('tbl_pengguna');

		return $hasil->row();
	}

}