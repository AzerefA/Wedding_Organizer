<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function getBarang($data = array())
	{
		return $this->db->where('nama_barang',$data['nama_barang'])
						->where('kategori_barang',$data['kategori_barang'])
						->get('barang')
						->result();

	}

}

/* End of file barang_model.php */
/* Location: ./application/models/barang_model.php */