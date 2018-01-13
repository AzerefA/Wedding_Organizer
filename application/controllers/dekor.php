<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dekor extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dekorasi_model');
	}

	public function index()
	{
		$data['judul'] = 'Dekorasi';
		$data['lainnya_view'] = 'dekor_view';
		$data['barang'] = $this->dekorasi_model->get_data_dekorasi();
		$this->load->view('template/template_lainnya', $data);
	}
	public function detil(){
		$id_dekorasi = $this->uri->segment(3);

		$data['judul'] = 'Detil Dekorasi';
		$data['barang'] = $this->dekorasi_model->get_data_dekorasi_byId($id_dekorasi);
		$this->load->view('detil_view_dekorasi', $data);
	}
}