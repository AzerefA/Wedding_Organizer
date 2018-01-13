<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class support extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('support_model');
	}
	public function index()
	{

		$data['judul'] = 'Suppport';
		$data['lainnya_view'] = 'supportAcara_view';
		$data['barang'] = $this->support_model->get_data_support();
		$this->load->view('template/template_lainnya', $data);
	}

	public function detil()
	{
		$id_support = $this->uri->segment(3);

		$data['judul'] = 'Detil Support';
		$data['barang'] = $this->support_model->get_detail_support($id_support);
		$this->load->view('detil_view_acara', $data);

	}
}