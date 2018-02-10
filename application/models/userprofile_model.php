<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Userprofile_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function select_riwayat_transaksi()
		{

			$sess = $this->session->userdata('userData');
			return $this->db->where('nama_lengkap', $sess['first_name']." ".$sess['last_name'])
							->get('transaksi')
							->result();
		}

		public function update_transaksi($bukti, $id_transaksi)
		{
			$data = array(
						'gambar_transaksi' => $bukti['file_name']
						 );

			$this->db->where('id_transaksi', $id_transaksi)
					 ->update('transaksi', $data);

			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else{
				return FALSE;
			}

		}

		public function select_data_user($id)
		{
			return $this->db->where('id', $id)
							->get('user')
							->row();
		}
		
	}