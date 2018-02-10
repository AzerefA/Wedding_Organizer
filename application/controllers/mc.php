<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mc extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
	}

	public function index()
	{

		$data['judul'] = 'mc';
		$data['lainnya_view'] = 'mc_view';
		$data['barang'] = $this->barang_model->select_mc();
		$this->load->view('template/template_lainnya', $data);
	}
	public function detil()
	{
		$kategoribarang = $this->uri->segment(3);

		$data['judul'] = 'Detil barang';
		$data['barang'] = $this->barang_model->get_detail_mc($kategoribarang);
		$this->load->view('detil_view', $data);

	}
}