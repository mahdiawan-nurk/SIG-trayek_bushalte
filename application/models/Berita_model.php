<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

	function get_berita_list($limit, $start){
        $query = $this->db->get('berita', $limit, $start);
        return $query;
    }

}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */