<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gold extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Paket Gold';
		$data['lainnya_view'] = 'gold_view';
		$this->load->view('template/template_lainnya', $data);
	}
}