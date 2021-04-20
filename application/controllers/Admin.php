<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Master_model','master');
	}
	public function index()
	{
		$this->load->view('backend/login');
	}

	function utama()
	{
		$data['page']='backend/dashboard';
		$this->load->view('backend/template',$data);
	}

	function berita()
	{
		$data['berita']=$this->master->viewData('berita',false)->result();
		$data['page']='backend/postingan/data';
		$this->load->view('backend/template',$data);
	}

	function databus()
	{
		$data['data']=$this->master->viewData('bus',false)->result();
		$data['page']='backend/bus/data';
		$this->load->view('backend/template',$data);
	}

	function datatrayek()
	{
		$data['page']='backend/trayek/data';
		$this->load->view('backend/template',$data);
	}

	function datarute()
	{
		$data['page']='backend/rute/data';
		$this->load->view('backend/template',$data);
	}


	function datahalte()
	{
		$data['halte']=$this->master->viewData('halte',false)->result();
		$data['page']='backend/halte/data';
		$this->load->view('backend/template',$data);
	}



}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */