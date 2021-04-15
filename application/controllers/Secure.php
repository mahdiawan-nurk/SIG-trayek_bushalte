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
			$session = array(
					'username' =>$cekLogin['username'],
					'email'=>$cekLogin['email'],
					'level'=>$cekLogin['level'],
					'login'=>"LOGIN"
				);
				
				$this->session->set_userdata( $session );
			if ($cekLogin['level']===1) {
				$data['page']='backend/dashboard';
				$this->load->view('backend/template',$data);
			}else{
				$data['page']='backend/dashboard';
				$this->load->view('backend/template',$data);
			}
		}else{
			
		}
		// $this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	function logout()
	{
		$lastlogin=[
			'last_login'=>date('Y-m-d H:i:s')
		];
		$this->master->update('users','email',$this->session->userdata('email'),$lastlogin);
		$data_session = array('email'=>"",'username'=>"",'level'=>"",'login'=>"");
      	$this->session->unset_userdata($data_session);//clear session
      	$this->session->sess_destroy();//tutup session
		redirect(base_url());

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
			'password' =>md5($this->input->post('password')),
			'level' =>2
		];
		$token=random_string('md5');
		$verifikasi=[
			'email_users'=>$this->input->post('email'),
			'token'=>$token,
			'verifikasi'=>1
		];
		$send=$this->sendmail($this->input->post('email'),$token,'mailverifikasi');
		if ($send) {
			$this->master->create('users',$registrasi,false);
			$this->master->create('users_verifikasi',$verifikasi,false);
			$data['type']='registrue';
			$data['page']='front/pesanregistrasi';
			$this->load->view('front/awal', $data);
		}else{
			$data['type']='regisfalse';
			$data['page']='front/pesanregistrasi';
			$this->load->view('front/awal', $data);
		}

		
	}

	function forgotpass($value='')
	{
		$data['formforgot']='block';
		$data['formreset']='none';
		$data['page']='front/lupapass';
		$this->load->view('front/awal',$data);
	}

	function forgotSaveToken()
	{
		$email=$this->input->post('email');
		$ceKmail=$this->master->viewData('users',['email'=>$email],true);
		if ($ceKmail->num_rows()>0) {
			$token=random_string('md5');
			$inputtoken=[
				'email_users'=>$email,
				'token'=>$token
			];
			$this->sendmail($this->input->post('email'),$token,'mailforgot');
			$this->master->create('users_forgotpass',$inputtoken,false);
			$data['type']='forgottrue';
		}else{
			$data['type']='forgotfalse';
		}
		
		$data['page']='front/pesanregistrasi';
		$this->load->view('front/awal',$data);
	}

	function forgotformresetPass($token)
	{
		$data['data']=$this->master->viewData('users_forgotpass',['token'=>$token],true)->row();
		$data['formforgot']='none';
		$data['formreset']='block';
		$data['page']='front/lupapass';
		$this->load->view('front/awal',$data);
	}

	function forggotnewPass()
	{
		$update=[
			'password'=>md5($this->input->post('password'))
		];
		$this->master->update('users','email',$this->input->post('email'),$update);
		$data['type']='forgotnew';
		$data['page']='front/pesanregistrasi';
		$this->load->view('front/awal',$data);
		// $this->output->set_content_type('application/json')->set_output(json_encode($data));

	}

	function konfirmasiakun($token)
	{
		$CekToken=$this->master->viewData('users_verifikasi',['token'=>$token],true)->row();
		$verifikasi=[
			'verifikasi'=>2
		];

		$this->db->where('id_verifikasi', $CekToken->id_verifikasi);
		$this->db->update('users_verifikasi', $verifikasi);
		$data['page']='front/verifikasi';
		$this->load->view('front/awal',$data);
		
	}

	function sendmail($email,$token,$page)
	{

		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'sig.trayek001@gmail.com',    // Ganti dengan email gmail kamu
               'smtp_pass' => 'sig@trayek-12',      // Password gmail kamu
               'smtp_port' => 465,
               'crlf'      => "\r\n",
               'newline'   => "\r\n",
               'wordwrap' => TRUE
           ];
           $data['token']=$token;
           
        $htmlContent=$this->load->view('front/'.$page,$data,TRUE);
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