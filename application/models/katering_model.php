<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class katering_model extends CI_Model {
	public function get_data_katering(){
		return $this->db->order_by('id_katering','ASC')
						->get('katering')
						->result();
	}

	public function get_detail_katering($id_katering)
	{
		return $this->db->where('id_katering',$id_katering)
						->get('katering')
						->row();	
	}
}