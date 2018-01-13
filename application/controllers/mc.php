<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mc_model');
	}
	public function index()
	{

		$data['judul'] = 'Mc';
		$data['lainnya_view'] = 'mc_view';
		$data['barang'] = $this->mc_model->get_data_mc();
		$this->load->view('template/template_lainnya', $data);
	}

	public function detil()
	{
		$id_mc = $this->uri->segment(3);

		$data['judul'] = 'Detil mc';
		$data['barang'] = $this->mc_model->get_detail_mc($id_mc);
		$this->load->view('detil_view_mc', $data);

	}
}