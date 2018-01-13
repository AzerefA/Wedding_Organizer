<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class undangan_model extends CI_Model {
	public function get_data_undangan(){
		return $this->db->order_by('id_undangan','ASC')
						->get('undangan')
						->result();
	}

	public function get_detail_undangan($id_undangan)
	{
		return $this->db->where('id_undangan',$id_undangan)
						->get('undangan')
						->row();	
	}
}