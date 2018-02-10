<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class platinum_model extends CI_Model {
	public function get_data_platinum(){
		return $this->db->order_by('id_platinum','ASC')
						->get('platinum')
						->result();
	}

	public function get_detail_platinum($id_platinum)
	{
		return $this->db->where('id_platinum',$id_platinum)
						->get('platinum')
						->row();	
	}
}