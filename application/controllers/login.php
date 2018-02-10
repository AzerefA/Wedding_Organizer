<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('google');
        $this->load->model('user');
	   $this->load->model('userprofile_model');
    }

    public function index()
    {
        if ($this->session->userdata('loggedIn') == True) {
            redirect('home');
        }

        if (isset($_GET['code'])) {
            //Google Auth
            $this->google->getAuthenticate();

            $gInfo = $this->google->getUserInfo();
            $userData['Google'] = true;
            $userData['id'] = $gInfo['id'];
            $userData['first_name'] = $gInfo['given_name'];
            $userData['last_name'] = $gInfo['family_name'];
            $userData['email'] = $gInfo['email'];
            $userData['password'] = '';
            $userData['gender'] = !empty($gInfo['gender']) ? $gInfo['gender'] : '';
            $userData['link'] = !empty($gInfo['link']) ? $gInfo['link'] : '';
            $userData['picture'] = !empty($gInfo['picture']) ? $gInfo['picture'] : '';

            $check = $this->user->checkUser($userData);


            $this->session->set_userdata('loggedIn', true);
            $this->session->set_userdata('userData', $userData);

            //print_r($this->session->userdata('userData'));

            redirect('home');

        }

        $data['loginURL'] = $this->google->loginURL();

        //load google login view
        $this->load->view('login/login_view', $data);
    }

    public function manualLogin()
    {
        if ($this->session->userdata('loggedIn') == True) {
            redirect('home');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[25]');
        $email = $this->input->post('email');
        $pass = md5($this->input->post('password'));

        if ($this->form_validation->run() == true) {
            if ($this->user->cek_user($email,$pass) == true) {
                redirect('home');
            } else {
                $data['notif'] = 'Login Gagal';
                $data['loginURL'] = $this->google->loginURL();
                $this->load->view('login/login_view', $data);
            }
        } else {
            $data['notif'] = validation_errors();
            $data['loginURL'] = $this->google->loginURL();
            $this->load->view('login/login_view', $data);
        }
    }

	
public function userprofil()
	{
        if ($this->session->userdata('loggedIn') != true) {
            redirect('login');
        }

        $userData = $this->session->userdata('userData');

        $data['user'] = $this->userprofile_model->select_data_user($userData['id']);
		$data['riwayat'] = $this->userprofile_model->select_riwayat_transaksi();
		$this->load->view('userprofil_view', $data);
	}

	public function upload_bukti()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '10000';

		$this->load->library('upload', $config);
		// $this->upload->initialize($config);

        $data = $this->session->userdata('userData');

		if ($this->upload->do_upload('foto')) {
			if ($this->userprofile_model->update_transaksi($this->upload->data(), $this->uri->segment(3)) == TRUE) {
				$data['notif'] = "Upload Sukses";
				$data['riwayat'] = $this->userprofile_model->select_riwayat_transaksi();
                $data['user'] = $this->userprofile_model->select_data_user($data['id']);
                $this->load->view('userprofil_view', $data);
			}else{
				$data['notif'] = "Upload Gagal";
				$data['riwayat'] = $this->userprofile_model->select_riwayat_transaksi();
                $data['user'] = $this->userprofile_model->select_data_user($data['id']);
                $this->load->view('userprofil_view', $data);
			}
		}else{
			$data['notif'] = $this->upload->display_errors();
			$data['riwayat'] = $this->userprofile_model->select_riwayat_transaksi();
            $data['user'] = $this->userprofile_model->select_data_user($data['id']);
            $this->load->view('userprofil_view', $data);
		}

	}

    public function logout()
    {
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('userData');
        $this->session->sess_destroy();

        //redirect to login page
        redirect('login');
    }

    public function loginPage()
    {
        $this->load->view('login/login_view');
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */