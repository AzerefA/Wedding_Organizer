<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function insert($data = array())
	{
		$this->db->insert('transaksi',$data);

		if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
	}

}

/* End of file transaksi_model.php */
/* Location: ./application/models/transaksi_model.php */