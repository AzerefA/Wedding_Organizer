<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class catering extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
	}

	public function index()
	{

		$data['judul'] = 'catering';
		$data['lainnya_view'] = 'catering_view';
		$data['barang'] = $this->barang_model->select_catering();
		$this->load->view('template/template_lainnya', $data);
	}
	public function detil()
	{
		$kategoribarang = $this->uri->segment(3);

		$data['judul'] = 'Detil barang';
		$data['barang'] = $this->barang_model->get_detail_catering($kategoribarang);
		$this->load->view('detil_view', $data);

	}
	
}