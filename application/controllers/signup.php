<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function index()
	{
		$this->load->view('login/signup_view');

	}

	public function daftar()
	{
		if ($this->session->userdata('loggedIn') != false) {
			redirect('/signUp','refresh');
		}

		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
            $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == True) {

            	$data['id'] = "1".rand(0,9999999999999999);
    			$data['Google'] = false;
            	$data['first_name'] = $this->input->post('firstname');
            	$data['last_name'] = $this->input->post('lastname');
            	$data['email'] = $this->input->post('email');
            	$data['password'] = md5($this->input->post('password'));
            	$data['link'] = '';
            	$data['picture'] = '';
            	$data['gender'] = '';
            	if ($this->user->tambahUser($data) == true) {
            		$this->session->set_flashdata(array('msg'=>'Akun Berhasil dibuat, silahkan login pada form yang tersedia','notif'=>'Berhasil'));
            		redirect('login','refresh');
            	}else{
            		$this->session->set_flashdata(array('msg'=>'Akun Gagal Dibuat','notif'=>'Gagal'));
            		redirect('signup','refresh');
            	}
            }else{
            	$data['notif'] = validation_errors();
            	$this->load->view('View File', $data);
            }
		}
	}
}