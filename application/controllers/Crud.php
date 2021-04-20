<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Master_model','master');
	}
	//area function crud menu halte
	function create_halte()
	{
		$data['page']='backend/halte/add';
		$this->load->view('backend/template',$data);
	}

	function save_halte($value='')
	{
		$config['upload_path'] = './images/halte/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar')){
			// $data = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('msg', 'File Gambar Tidak Boleh Kosong, Atau Ukuran Gambar Terlalu besar');
			redirect(base_url().'crud/create_halte','refresh');
		}
		else{
			$gmb = $this->upload->data('file_name');
			$input=[
				'kordinat'=>$this->input->post('longitude').';'.$this->input->post('latitude'),
				'lokasi_halte'=>$this->input->post('lokasi'),
				'kondisi_halte'=>$this->input->post('kondisi'),
				'gambar'=>$gmb
			];
			$this->session->set_flashdata('msg', 'Halte Baru Telah Di Tambahkan');
			$this->master->create('halte',$input,false);
			redirect(base_url().'admin/datahalte','refresh');
		}



		
	}

	function edit_halte()
	{
		$id=$this->input->get('id');
		$data['halte']=$this->master->viewData('halte',['id_halte'=>$id],true)->row();
		$data['page']='backend/halte/edit';
		$this->load->view('backend/template',$data);
	}

	function update_halte($value='')
	{
		$config['upload_path'] = './images/halte/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar')){
			// $data = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('msg', 'File Gambar Tidak Boleh Kosong, Atau Ukuran Gambar Terlalu besar');
			redirect(base_url().'crud/edit_halte','refresh');
		}
		else{
			$gmb = $this->upload->data('file_name');
			$input=[
				'kordinat'=>$this->input->post('longitude').';'.$this->input->post('latitude'),
				'lokasi_halte'=>$this->input->post('lokasi'),
				'kondisi_halte'=>$this->input->post('kondisi'),
				'gambar'=>$gmb
			];
			$this->session->set_flashdata('msg', 'Data Halte Telah Di Update');
			$this->master->update('halte','id_halte',$this->input->post('id'),$input);
			redirect(base_url().'admin/datahalte','refresh');
		}
	}
	//end of area crud halte

	function create_berita()
	{
		$data['page']='backend/postingan/add';
		$this->load->view('backend/template',$data);
	}
}

/* End of file Crud.php */
/* Location: ./application/controllers/Crud.php */