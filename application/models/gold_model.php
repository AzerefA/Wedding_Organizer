<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gold_model extends CI_Model {
	public function get_data_gold(){
		return $this->db->order_by('id_gold','ASC')
						->get('gold')
						->result();
	}

	public function get_detail_gold($id_gold)
	{
		return $this->db->where('id_gold',$id_gold)
						->get('gold')
						->row();	
	}
}