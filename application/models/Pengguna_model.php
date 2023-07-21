<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {
	
	public function get()
	{
		return $this->db->get('tbl_pegawai')->result_array();
	}

	public function find($id)
	{
		return $this->db->get_where('tbl_pegawai', ['id_pegawai' => $id])->row_array();
	}

	public function search($key)
	{
		$this->db->select('*');
		$this->db->from('tbl_pegawai');
		$this->db->like('nama_pegawai', $key);
		$this->db->or_like('username', $key);
		$this->db->or_like('email', $key);
		$this->db->or_like('nohp', $key);
		$keyword = $this->db->get();
		return $keyword->result_array();
	}

	public function create()
	{
		$data = [
			"nama_pegawai" => $this->input->post('nama_pegawai'),
			"username"     => $this->input->post('username'),
			"password"     => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			"email"        => $this->input->post('email'),
			"nohp"         => $this->input->post('nohp')
		];

		$this->db->insert('tbl_pegawai', $data);
	}

	public function update($id)
	{
		$data = [
			"nama_pegawai" => $this->input->post('nama_pegawai'),
			"username"     => $this->input->post('username'),
			"password"     => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			"email"        => $this->input->post('email'),
			"nohp"         => $this->input->post('nohp')
		];

		$this->db->where('id_pegawai', $id);
		$this->db->update('tbl_pegawai', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_pegawai', $id);
		$this->db->delete('tbl_pegawai');
	}
}