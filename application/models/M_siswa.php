<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	public function ambil_data(){
		return $this->db->get('tbl_siswa')->result();
	}

	public function simpan_data(){
		$data['id_siswa']		=uniqid();
		$data['nim']			=$this->input->post('nim');
		$data['nama']			=$this->input->post('nama');
		$data['tanggal_lahir']	=$this->input->post('tanggal_lahir');
		$data['jenis_kelamin']	=$this->input->post('jenis_kelamin');
		$data['alamat']			=$this->input->post('alamat');

		$hasil=$this->db->insert('tbl_siswa',$data);
		return $hasil;
	}

	public function ubah_data(){
		$id_siswa=$this->input->post('id_siswa');

		$data['nim']			=$this->input->post('nim');
		$data['nama']			=$this->input->post('nama');
		$data['tanggal_lahir']	=$this->input->post('tanggal_lahir');
		$data['jenis_kelamin']	=$this->input->post('jenis_kelamin');
		$data['alamat']			=$this->input->post('alamat');

		$this->db->where('id_siswa',$id_siswa);
		$hasil	=$this->db->update('tbl_siswa',$data);
		return $hasil;
	}

	public function hapus_data(){
		$id_siswa=$this->input->post('id_siswa');

		$this->db->where('id_siswa',$id_siswa);
		$hasil=$this->db->delete('tbl_siswa');
		return $hasil;
	}
}