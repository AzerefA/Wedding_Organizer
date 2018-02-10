<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class silver_model extends CI_Model {
	public function get_data_silver(){
		return $this->db->order_by('id_silver','ASC')
						->get('silver')
						->result();
	}

	public function get_detail_silver($id_silver)
	{
		return $this->db->where('id_silver',$id_silver)
						->get('silver')
						->row();	
	}
}