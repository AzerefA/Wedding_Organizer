<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Avenue_model extends CI_Model {
	
	public function get_data_avenue(){
		return $this->db->order_by('id_avenue','ASC')
						->get('avenue')
						->result();
	}

	public function get_detail_avenue($id_avenue)
	{
		return $this->db->where('id_avenue',$id_avenue)
						->get('avenue')
						->row();	
	}

}