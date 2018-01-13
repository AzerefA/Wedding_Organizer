<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('avenue_model');
	}

	public function index()
	{

		$data['judul'] = 'Gedung';
		$data['lainnya_view'] = 'gedung_view';
		$data['barang'] = $this->avenue_model->get_data_avenue();
		$this->load->view('template/template_lainnya', $data);
	}

	public function detil()
	{
		$id_avenue = $this->uri->segment(3);

		$data['judul'] = 'Detil Gedung';
		$data['barang'] = $this->avenue_model->get_detail_avenue($id_avenue);
		$this->load->view('detil_view', $data);

	}
	// public function dataavenue()
	// {
	// 	if ($this->session->userdata('logged_in') == TRUE) 
	// 	{
	// 		$data['main_view'] = 'admin/tabelavenue_view';
	// 		$data['script'] = 'admin/script/udanganScript';
	// 		$data['barang'] = $this->avenue_model->get_data_avenue();
			
	// 		$this->load->view('admin/template', $data);
	// 	} else {
	// 		redirect('admin/index');
	// 	}
	// }
}