<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Platinum extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Paket Platinum';
		$data['lainnya_view'] = 'platinum_view';
		$this->load->view('template/template_lainnya', $data);
	}
}