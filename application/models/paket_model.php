<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_model extends CI_Model {

	public function getPaketPlatinum()
	{
		return $this->db->like('kategori_barang','Platinum')
						->get('barang');		
	}

	public function getPaketGold()
	{
		return $this->db->like('kategori_barang','Gold')
						->get('barang');		
	}


	public function getPaketSilver()
	{
		return $this->db->like('kategori_barang','Silver')
						->get('barang');		
	}

	

}

/* End of file paket_model.php */
/* Location: ./application/models/paket_model.php */