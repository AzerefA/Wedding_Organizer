<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class undangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('undangan_model');
	}
	public function index()
	{

		$data['judul'] = 'undangan';
		$data['lainnya_view'] = 'undangan_view';
		$data['barang'] = $this->undangan_model->get_data_undangan();
		$this->load->view('template/template_lainnya', $data);
	}

	public function detil()
	{
		$id_undangan = $this->uri->segment(3);

		$data['judul'] = 'Detil undangan';
		$data['barang'] = $this->undangan_model->get_detail_undangan($id_undangan);
		$this->load->view('detil_view_undangan', $data);

	}
}