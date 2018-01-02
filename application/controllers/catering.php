<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catering extends CI_Controller {

	public function index()
	{
		$this->load->view('catering_view');
	}
}