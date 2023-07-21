<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
	
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if( $this->form_validation->run() == false )  {
			$this->load->view('login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));

		$user = $this->db->get_where('tbl_pegawai', ['username' => $username])->row_array();
		
		if( !$user ) {
			$this->session->set_flashdata('message', 'Username tidak terdaftar');
			redirect('login');

		} else {
			if( !password_verify($password, $user['password']) ) {
				$this->session->set_flashdata('message', 'Password salah');
				redirect('login');	

			} else {
				$data = [
					'id'      	=> $user['id_pegawai'],
					'nama'      => $user['nama_pegawai'],
					'username'  => $user['username'],
					'email'  		=> $user['email'],
					'nohp'  		=> $user['nohp'],
				];

				$this->session->set_userdata($data);
				$this->session->set_flashdata('message', 'Login');
				redirect('pengguna');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('nohp');
		redirect('login');
	}
}