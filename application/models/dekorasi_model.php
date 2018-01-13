<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dekorasi_model extends CI_Model {

	public function get_data_dekorasi(){
		return $this->db->order_by('id_dekorasi','ASC')
						->get('dekorasi')
						->result();
	}
	public function get_data_dekorasi_byId($id_dekorasi){
		return $this->db->where('id_dekorasi', $id_dekorasi)
						->get('dekorasi')
						->row();
	}
}