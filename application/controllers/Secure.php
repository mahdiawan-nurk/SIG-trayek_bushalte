<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secure extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Master_model','master');
	}
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
		$email=$this->input->post('email');
		$password=$this->input->post('password');

		$login=[
			'email'=>$email,
			'password'=>md5($password),
		];
		$cekLogin=$this->master->viewData('users',$login,true)->row_array();
		if ($cekLogin) {
			if ($cekLogin['level']===1) {
				$data='is_admin';
			}else{
				$data='is_users';
			}
		}else{
			$data="Akun tidak di temukan";
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	function registrasi($value='')
	{
		$data['page']='front/registrasi';
		$this->load->view('front/awal', $data);
	}

	function saveregistrasi()
	{
		$registrasi=[
			'username' =>$this->input->post('username'),
			'email'    =>$this->input->post('email'),
			'alamat'   =>$this->input->post('alamat'),
			'password' =>[
				'dekrip' =>$this->input->post('password'),
				'enkrip' =>md5($this->input->post('password'))
			],
			'level' =>2
		];
		$token=random_string('md5');
		$verifikasi=[
			'email_users'=>$this->input->post('email'),
			'token'=>$token,
			'verifikasi'=>1
		];
		$send=$this->sendmail($this->input->post('email'),$token);
		if ($send) {
			$this->output->set_content_type('application/json')->set_output(json_encode(['akun'=>$registrasi,'verifikasi'=>$verifikasi]));
		}else{
			echo 'gagal';
		}

		
	}

	function forgotpass($value='')
	{
		$data['page']='front/lupapass';
		$this->load->view('front/awal',$data);
	}

	function konfirmasiakun($token)
	{
		echo $token;
	}

	function sendmail($email,$token)
	{

		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'pmb692243@gmail.com',    // Ganti dengan email gmail kamu
               'smtp_pass' => '4dm1nP0lt3k',      // Password gmail kamu
               'smtp_port' => 465,
               'crlf'      => "\r\n",
               'newline'   => "\r\n",
               'wordwrap' => TRUE
           ];
           $data['token']=$token;
           
        $htmlContent=$this->load->view('front/mailverifikasi',$data,TRUE);
        $this->load->library('email', $config);
        $this->email->from('no-reply@poltek-kampar.ac.id', 'SIG TRAYEK BUS');
        $this->email->to($email); // Ganti dengan email tujuan kamu
        $this->email->attach('');
        $this->email->subject('Verifikasi Email');
        $this->email->message($htmlContent);
        if ($this->email->send()) {
        	return true;
        } else {
        	return false;
        }
    }


}

/* End of file Secure.php */
/* Location: ./application/controllers/Secure.php */