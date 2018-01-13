<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class support_model extends CI_Model {
	public function get_data_support(){
		return $this->db->order_by('id_support','ASC')
						->get('support')
						->result();
	}

	public function get_detail_support($id_support)
	{
		return $this->db->where('id_support',$id_support)
						->get('support')
						->row();	
	}
}