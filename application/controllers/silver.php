<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Silver extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Paket Silver';
		$data['lainnya_view'] = 'silver_view';
		$this->load->view('template/template_lainnya', $data);
	}
}