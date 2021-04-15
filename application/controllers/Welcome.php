<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$data['page']='front/berita';
		$this->load->view('front/awal',$data);
	}

	function bus($value='')
	{
		$data['page']='front/bus';
		$this->load->view('front/awal',$data);
	}

	function peta($value='')
	{
		$data['page']='front/peta';
		$this->load->view('front/awal',$data);
	}

	function halte($value='')
	{
		$data['page']='front/halte';
		$this->load->view('front/awal',$data);
	}

	function readmore()
	{
		$data['page']='front/readmore';
		$this->load->view('front/awal',$data);
	}
	
}
