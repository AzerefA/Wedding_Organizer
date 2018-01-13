<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catering extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('katering_model');
	}
	public function index()
	{

		$data['judul'] = 'katering';
		$data['lainnya_view'] = 'catering_view';
		$data['barang'] = $this->katering_model->get_data_katering();
		$this->load->view('template/template_lainnya', $data);
	}

	public function detil()
	{
		$id_katering = $this->uri->segment(3);

		$data['judul'] = 'Detil katering';
		$data['barang'] = $this->katering_model->get_detail_katering($id_katering);
		$this->load->view('detil_view_katering', $data);

	}
}