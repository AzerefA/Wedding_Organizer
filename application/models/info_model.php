<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Info_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function insert_testi(){
			$data = array('nama_testi' => $this->input->post('name'),
			 				'email_testi' => $this->input->post('email'),
			 				'comment' => $this->input->post('message'),);

			$this->db->insert('testimoni', $data);

			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else{
				return FALSE;
			}
		}

		public function select_testi()
		{
			return $this->db->get('testimoni')
							->result();
		}
	}