<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
	}

	public function index()
	{
		$data['gedung'] = $this->barang_model->select_gedung();

		$tempGedung = array();
		foreach ($data['gedung'] as $key => $value) {
			$tempGedung[$key]['id_barang'] = $value->id_barang;
			$tempGedung[$key]['nama_barang'] = $value->nama_barang;
			$tempGedung[$key]['deskripsi_barang'] = $value->deskripsi_barang;
			$tempGedung[$key]['harga_barang'] = $value->harga_barang;
			$tempGedung[$key]['gambar_barang'] = $value->gambar_barang;
		}

		$data['dekor'] = $this->barang_model->select_dekor();

		$tempDekor = array();
		foreach ($data['dekor'] as $key => $value) {
			$tempDekor[$key]['id_barang'] = $value->id_barang;
			$tempDekor[$key]['nama_barang'] = $value->nama_barang;
			$tempDekor[$key]['deskripsi_barang'] = $value->deskripsi_barang;
			$tempDekor[$key]['harga_barang'] = $value->harga_barang;
			$tempDekor[$key]['gambar_barang'] = $value->gambar_barang;
		}
		$data['undangan'] = $this->barang_model->select_undangan();

		$tempUndangan = array();
		foreach ($data['undangan'] as $key => $value) {
			$tempUndangan[$key]['id_barang'] = $value->id_barang;
			$tempUndangan[$key]['nama_barang'] = $value->nama_barang;
			$tempUndangan[$key]['deskripsi_barang'] = $value->deskripsi_barang;
			$tempUndangan[$key]['harga_barang'] = $value->harga_barang;
			$tempUndangan[$key]['gambar_barang'] = $value->gambar_barang;
		}

		$data['gedung'] = $tempGedung;
		$data['dekor'] = $tempDekor;
		$data['undangan'] = $tempUndangan;
		$this->load->view('utama_view',$data);

	}


}