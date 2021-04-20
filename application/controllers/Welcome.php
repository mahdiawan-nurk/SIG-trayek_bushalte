<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('Berita_model','berita');
		$this->load->model('Master_model','master');
		$this->load->model('Bus_model','bus');
		$this->load->model('Halte_model','halte');
	}
	public function index()
	{
		 //konfigurasi pagination
        $config['base_url'] = base_url('home.html/page'); //site url
        $config['total_rows'] = $this->db->count_all('berita'); //total row
        $config['per_page'] = 4;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

         // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="center"><ul class="pagination">';
        $config['full_tag_close']   = '</ul></div>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li><a class="active">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tagl_close']  = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tagl_close']  = '</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tagl_close']  = '<li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->berita->get_berita_list($config["per_page"], $data['page'])->result();
        $data['pagination'] = $this->pagination->create_links();

        $data['page']='front/berita';
        $this->load->view('front/awal',$data);
        // $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function bus($value='')
    {
    	 //konfigurasi pagination
        $config['base_url'] = base_url('bus.html/page'); //site url
        $config['total_rows'] = $this->db->count_all('bus'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

         // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="center"><ul class="pagination">';
        $config['full_tag_close']   = '</ul></div>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li><a class="active">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tagl_close']  = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tagl_close']  = '</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tagl_close']  = '<li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->bus->get_bus_list($config["per_page"], $data['page'])->result();
        $data['pagination'] = $this->pagination->create_links();
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
    	 $config['base_url'] = base_url('halte.html/page'); //site url
        $config['total_rows'] = $this->db->count_all('halte'); //total row
        $config['per_page'] = 1;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

         // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="center"><ul class="pagination">';
        $config['full_tag_close']   = '</ul></div>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li><a class="active">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tagl_close']  = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tagl_close']  = '</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tagl_close']  = '<li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->halte->get_halte_list($config["per_page"], $data['page'])->result();
        $data['pagination'] = $this->pagination->create_links();
        $data['halte']=$this->master->viewData('halte',false)->result();
    	$data['page']='front/halte';
    	$this->load->view('front/awal',$data);
    }

    function readmore($url)
    {
    	$data['data']=$this->master->viewData('berita',['url_linked'=>$url],true)->row();
    	$data['page']='front/readmore';
    	$this->load->view('front/awal',$data);
    }

}
