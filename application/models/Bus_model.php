<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bus_model extends CI_Model {

	function get_bus_list($limit, $start){
        $query = $this->db->get('bus', $limit, $start);
        return $query;
    }

}

/* End of file Bus_model.php */
/* Location: ./application/models/Bus_model.php */