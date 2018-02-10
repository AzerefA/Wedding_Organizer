<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class platinum extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
	}

	public function index()
	{

		$data['judul'] = 'platinum';
		$data['lainnya_view'] = 'platinum_view';
		$data['barang'] = $this->barang_model->select_platinum();
		$data['barang'] = $this->barang_model->select_platinum1();
		$data['barang'] = $this->barang_model->select_platinum2();
		$data['barang'] = $this->barang_model->select_platinum3();
		$data['barang'] = $this->barang_model->select_platinum4();
		$data['barang'] = $this->barang_model->select_platinum5();
		$data['barang'] = $this->barang_model->select_platinum6();
		$this->load->view('template/template_lainnya', $data);
	}
	public function detil()
	{
		$kategoribarang = $this->uri->segment(3);

		$data['judul'] = 'Detil barang';
		$data['barang'] = $this->barang_model->get_detail_platinum($kategoribarang);
		$this->load->view('detil_view', $data);

	}
}

	