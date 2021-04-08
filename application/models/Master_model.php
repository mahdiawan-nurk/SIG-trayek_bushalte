<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {
public function create($table,$data,$batch=false)
	{
		if ($batch==true) {
			return $this->db->insert_batch($table, $data);
		}else{
			return $this->db->insert($table, $data);
		}
		
	}

	public function update($table,$pk,$id,$data)
	{
		$this->db->where($pk, $id);
		return $this->db->update($table, $data);

	}
	
	public function viewData($table,$data=null,$where=false)
	{
		if ($where===false) {
			return $this->db->get($table);
		}else{
			return $this->db->get_where($table, $data );
		}
	}
	

}

/* End of file Master_model.php */
/* Location: ./application/models/Master_model.php */