<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class silver extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
	}

	public function index()
	{

		$data['judul'] = 'silver';
		$data['lainnya_view'] = 'silverAcara_view';
		$data['barang'] = $this->barang_model->select_silver();
		$this->load->view('template/template_lainnya', $data);
	}
	public function detil()
	{
		$kategoribarang = $this->uri->segment(3);

		$data['judul'] = 'Detil barang';
		$data['barang'] = $this->barang_model->get_detail_silver($kategoribarang);
		$this->load->view('detil_view', $data);

	}
}
	