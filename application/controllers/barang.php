<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
	}


	public function index()
	{
		
	}

	public function getBarangAjax($data = array())
	{
		$result['data'] = $this->barang_model->getBarang($data);
		echo json_encode($result);
	}

}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */
