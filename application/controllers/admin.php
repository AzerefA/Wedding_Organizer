<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['main_view'] = 'admin/tambahUndangan';
		$data['script'] = 'admin/script/udanganScript';
		$this->load->view('admin/template',$data);
	}

	public function undangan()
	{
		$data['main_view'] = 'admin/tambahUndangan';
		$data['script'] = 'admin/script/udanganScript';
		$this->load->view('admin/template',$data);
	}
}
