<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Halte_model extends CI_Model {

	function get_halte_list($limit, $start){
        $query = $this->db->get('halte', $limit, $start);
        return $query;
    }

}

/* End of file Halte_model.php */
/* Location: ./application/models/Halte_model.php */