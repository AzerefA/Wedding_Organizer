<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photographer extends CI_Controller {

	public function index()
	{
		$this->load->view('photographer_view');
	}
}