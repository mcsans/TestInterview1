<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if( !$this->session->userdata('id') ) { redirect('login'); }
	}

	public function index()
	{
		$this->load->view('pengguna/index');
	}
	
	public function readData($keyword=null)
	{
		if(!$keyword) {
			$data['pengguna'] = $this->Pengguna_model->get();
		} else {
			$data['pengguna'] = $this->Pengguna_model->search($keyword);
		}
		
		echo $this->load->view('pengguna/tbody', $data, TRUE);
	}	

	public function showForm($id=null)
    {
        if(!$id){
						echo $this->load->view('pengguna/form-add', '', TRUE);
        } else {
						$data['pengguna'] = $this->Pengguna_model->find($id);
						echo $this->load->view('pengguna/form-edit', $data, TRUE);
        }
    }

	public function create()
	{
		$this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tbl_pegawai.username]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_pegawai.email]');
		$this->form_validation->set_rules('nohp', 'No HP', 'required|numeric');

		if( $this->form_validation->run() == FALSE )  {
			echo $this->load->view('pengguna/form-add', '', TRUE);
		} else {
			$this->Pengguna_model->create();
		}
	}

	public function update($id)
	{
		$data['pengguna'] = $this->Pengguna_model->find($id);
		
		$this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('nohp', 'No HP', 'required|numeric');

		if( $data['pengguna']['username'] == $this->input->post('username') ) {
			$this->form_validation->set_rules('username', 'Username', 'required');
		} else {
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tbl_pegawai.username]');
		}

		if( $data['pengguna']['email'] == $this->input->post('email') ) {
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		} else {
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_pegawai.email]');
		}

		if( $this->form_validation->run() == FALSE )  {
			echo $this->load->view('pengguna/form-edit', $data, TRUE);
		} else {
			$this->Pengguna_model->update($id);
		}
	}

	public function delete($id)
	{
		$this->Pengguna_model->delete($id);
	}
}
