<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secure extends CI_Controller {

	public function index()
	{
		$data['page']='front/login';
		$this->load->view('front/awal', $data);
	}

	function registrasi($value='')
	{
		$data['page']='front/registrasi';
		$this->load->view('front/awal', $data);
	}

}

/* End of file Secure.php */
/* Location: ./application/controllers/Secure.php */