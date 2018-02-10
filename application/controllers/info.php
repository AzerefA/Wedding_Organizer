<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('info_model');
	}

	public function index()
	{
		$data['judul'] = 'Informasi';
		$data['data'] = $this->info_model->select_testi();
		$data['lainnya_view'] = 'info_view';
		$this->load->view('template/template_lainnya', $data);
	}

	public function do_testi()
	{
		if ($this->input->post("submit")) {
			if ($this->info_model->insert_testi() == TRUE) {
				$data['notif'] = 'Berhasil';
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$data['notif'] = 'Gagal';
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}
}