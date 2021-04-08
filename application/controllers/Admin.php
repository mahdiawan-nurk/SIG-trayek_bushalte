<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('backend/login');
	}

	function utama()
	{
		$this->load->view('backend/template');
	}


}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */