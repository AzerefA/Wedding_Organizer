<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
		$this->load->model('barang_model');
	}

	public function index()
	{

		if ($this->session->userdata('loggedIn') == True) {
            $data['gedung'] = $this->barang_model->select_gedung();
		$data['dekor'] = $this->barang_model->select_dekor();
		$data['undangan'] = $this->barang_model->select_undangan();
		$data['mc'] = $this->barang_model->select_mc();
		$data['support'] = $this->barang_model->select_support();
		$data['fotografer'] = $this->barang_model->select_photographer();
		$data['katering'] = $this->barang_model->select_catering();
		$data['judul'] = 'Pemesanan';
		$data['lainnya_view'] = 'pinjam_view';
		$data['script'] = 'Script/pinjamScript';
		$this->load->view('template/template_lainnya', $data);
        }else{
        	$this->session->set_flashdata(array('notif'=>'UnAuthorized','msg'=>'Silahkan Login Terlebih Dahulu Untuk Melakukan Pemesanan'));
        	redirect('login');
        }
		
	}

	public function pinjams()
	{
			$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('ktp', 'Nomer KTP', 'trim|required');
			$this->form_validation->set_rules('jamGedung', 'Jam Sewa', 'trim|required');
			$this->form_validation->set_rules('gedung', 'Gedung', 'trim|required');
            $this->form_validation->set_rules('dekor', 'Tempat Lahir', 'trim|required');
            $this->form_validation->set_rules('undangan', 'Tanggal Lahir', 'trim|required');
            $this->form_validation->set_rules('jumlahUndangan', 'Tanggal Lahir', 'trim|required');
            $this->form_validation->set_rules('mc', 'Mc', 'trim');
            $this->form_validation->set_rules('support', 'Support', 'trim');
            $this->form_validation->set_rules('fotografer', 'Fotografer', 'trim');
            $this->form_validation->set_rules('katering', 'Katering', 'trim');
            
            $today = strtotime(date('Y-m-d'));
            $inputDate = strtotime($this->input->post('tanggal_acara'));
            $hasil = $inputDate - $today;

            if ($hasil/86400 < 1 ) {
            	$this->session->set_flashdata(array('notif'=>'Tanggal Ngawur','msg'=>'Tanggal Acara Tidak Valid'));
            	if ($this->input->post('from') == 'platinum') {
            			redirect('paket/platinum');
            	}
            	if ($this->input->post('from') == 'gold'){
            			redirect('paket/gold');
            	}
            	if ($this->input->post('from') == 'silver'){
            			redirect('paket/silver');
            	}
            	redirect('pinjam');
            }

            if ($this->form_validation->run() == true) {

            	$foto = $this->input->post('fotografer');
            	$katering = $this->input->post('katering');
            	$jumKatering = $this->input->post('jumKat');
            	$support = $this->input->post('support');
            	$mc = $this->input->post('mc');

            	$data['nama_lengkap'] = $this->input->post('nama');
            	$data['alamat'] = $this->input->post('alamat');
            	$data['no_ktp'] = $this->input->post('ktp');
            	$data['nama_undangan'] = $this->input->post('undangan');
            	$data['jumlah_undangan'] = $this->input->post('jumlahUndangan');
            	$data['nama_gedung'] = $this->input->post('gedung');
            	$data['jam_gedung'] = $this->input->post('jamGedung');
            	$data['dekorasi'] = $this->input->post('dekor');
            	$data['photographer'] = !empty($foto) ? $this->input->post('fotografer') : '';
            	$data['katering'] = !empty($katering) ? $this->input->post('katering') : '';
            	$data['jumlah_katering'] = !empty($jumKatering) ? $this->input->post('jumKat') : '';
            	$data['mc'] = !empty($mc) ? $this->input->post('mc') : '';
            	$data['support'] = !empty($support) ? $this->input->post('support') : '';
            	$data['total_harga'] = $this->input->post('totalHarga');
            	$data['status'] = 'Belum Lunas';
            	$data['tanggal_acara'] = $this->input->post('tanggal_acara');
            	$data['tanggal_transaksi'] = date('Y-m-d');
            	
            	if ($this->transaksi_model->insert($data) == true) {
            		redirect('login/userprofil');
            	}else{
            		if ($this->input->post('from') == 'platinum') {
            			redirect('paket/platinum');
            		}
            		if ($this->input->post('from') == 'gold'){
            			redirect('paket/gold');
            		}

            		if ($this->input->post('from') == 'silver'){
            			redirect('paket/silver');
            		}
            		redirect('pinjam');
            	}
            }else{
    //         	$data['judul'] = 'Peminjaman';
    //         	$data['notif'] = 'validasi';
    //         	$data['script'] = 'Script/pinjamScript';
    //         	$data['msg'] = validation_errors();
				// $data['lainnya_view'] = 'pinjam_view';
				// $this->load->view('template/template_lainnya', $data);
				$this->session->set_flashdata(array('notif'=>'validation','message'=> validation_errors()));
				if ($this->input->post('from') == 'platinum') {
            			redirect('paket/platinum');
            	}
            	if ($this->input->post('from') == 'gold'){
            			redirect('paket/gold');
            	}
            	if ($this->input->post('from') == 'silver'){
            			redirect('paket/silver');
            	}
				redirect('pinjam');
            }
	}
}