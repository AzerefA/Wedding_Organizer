<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Peminjaman';
		$data['lainnya_view'] = 'pinjam_view';
		$this->load->view('template/template_lainnya', $data);
	}
}