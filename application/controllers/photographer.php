<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class photographer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('photographer_model');
	}
	public function index()
	{

		$data['judul'] = 'photographer';
		$data['lainnya_view'] = 'photographer_view';
		$data['barang'] = $this->photographer_model->get_data_photographer();
		$this->load->view('template/template_lainnya', $data);
	}

	public function detil()
	{
		$id_photographer = $this->uri->segment(3);

		$data['judul'] = 'Detil photographer';
		$data['barang'] = $this->photographer_model->get_detail_photographer($id_photographer);
		$this->load->view('detil_view_photographer', $data);

	}
}