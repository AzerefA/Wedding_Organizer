<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mc_model extends CI_Model {
	public function get_data_mc(){
		return $this->db->order_by('id_mc','ASC')
						->get('mc')
						->result();
	}

	public function get_detail_mc($id_mc)
	{
		return $this->db->where('id_mc',$id_mc)
						->get('mc')
						->row();	
	}
}