<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if( $this->session->userdata('id') ) { redirect('pengguna'); }
	}

	public function index()
	{
		$this->Auth_model->login();
	}
}
