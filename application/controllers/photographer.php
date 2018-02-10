<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class photographer extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
	}

	public function index()
	{

		$data['judul'] = 'photographer';
		$data['lainnya_view'] = 'photographer_view';
		$data['barang'] = $this->barang_model->select_photographer();
		$this->load->view('template/template_lainnya', $data);
	}
	public function detil()
	{
		$kategoribarang = $this->uri->segment(3);

		$data['judul'] = 'Detil barang';
		$data['barang'] = $this->barang_model->get_detail_photographer($kategoribarang);
		$this->load->view('detil_view', $data);

	}
	
}