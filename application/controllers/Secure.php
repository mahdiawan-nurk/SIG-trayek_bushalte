<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secure extends CI_Controller {

	/*
	method / function index sebagai root awal class, method index akan menampilkan halaman login user
	*/
	public function index()
	{
		$data['page']='front/login';
		$this->load->view('front/awal', $data);
	}

	/*
	method / function ceklogin berfungsi untuk melakukan cek login admin berdasarkan email dan password,
	email dan password akan di cek di db users dengan level 1 adalah login, jika pengecekan login berhasil makan langsung redirect ke halaman awal user
	*/
	function ceklogin()
	{
		
	}

	function registrasi($value='')
	{
		$data['page']='front/registrasi';
		$this->load->view('front/awal', $data);
	}
	function forgotpass($value='')
	{
		$data['page']='front/lupapass';
		$this->load->view('front/awal',$data);
	}

}

/* End of file Secure.php */
/* Location: ./application/controllers/Secure.php */