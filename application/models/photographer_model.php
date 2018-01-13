<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class photographer_model extends CI_Model {
	public function get_data_photographer(){
		return $this->db->order_by('id_photographer','ASC')
						->get('photographer')
						->result();
	}

	public function get_detail_photographer($id_photographer)
	{
		return $this->db->where('id_photographer',$id_photographer)
						->get('photographer')
						->row();	
	}
}