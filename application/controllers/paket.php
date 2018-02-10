<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('paket_model');
	}

	public function platinum()
	{

		if ($this->session->userdata('loggedIn') == True) {
         	$data['barang'] = $this->paket_model->getPaketPlatinum();
		$data['judul'] = 'platinum';
		$data['lainnya_view'] = 'paket_view';
		$data['script'] = 'Script/pinjamScript';
		$this->load->view('template/template_lainnya', $data);
        }else{
        	$this->session->set_flashdata(array('notif'=>'UnAuthorized','msg'=>'Silahkan Login Terlebih Dahulu Untuk Melakukan Pemesanan'));
        	redirect('login');
        }


		
	}

	public function gold()
	{
		if ($this->session->userdata('loggedIn') == True) {
         $data['barang'] = $this->paket_model->getPaketGold();
		$data['judul'] = 'gold';
		$data['lainnya_view'] = 'paket_view';
		$data['script'] = 'Script/pinjamScript';
		$this->load->view('template/template_lainnya', $data);
        }else{
        	$this->session->set_flashdata(array('notif'=>'UnAuthorized','msg'=>'Silahkan Login Terlebih Dahulu Untuk Melakukan Pemesanan'));
        	redirect('login');
        }
		
	}

	public function silver()
	{
		if ($this->session->userdata('loggedIn') == True) {
        
		$data['barang'] = $this->paket_model->getPaketSilver();
		$data['judul'] = 'silver';
		$data['lainnya_view'] = 'paket_view';
		$data['script'] = 'Script/pinjamScript';
		$this->load->view('template/template_lainnya', $data);
        }else{
        	$this->session->set_flashdata(array('notif'=>'UnAuthorized','msg'=>'Silahkan Login Terlebih Dahulu Untuk Melakukan Pemesanan'));
        	redirect('login');
        }
	}
}