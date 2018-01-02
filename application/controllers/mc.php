<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mc extends CI_Controller {

	public function index()
	{
		$this->load->view('mc_view');
	}
}