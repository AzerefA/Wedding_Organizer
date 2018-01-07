<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	  public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->library('google');
	 	$this->load->model('user');
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
			print_r($gInfo);
			$userData['Google'] = true;
			$userData['id'] = $gInfo['id'];
			$userData['first_name'] = $gInfo['given_name'];
			$userData['last_name'] = $gInfo['family_name'];
			$userData['email']          = $gInfo['email'];
			$userData['gender']         = !empty($gInfo['gender'])?$gInfo['gender']:'';
            $userData['link']    = !empty($gInfo['link'])?$gInfo['link']:'';
            $userData['picture']    = !empty($gInfo['picture'])?$gInfo['picture']:'';
			
            $check = $this->user->checkUser($userData);

            $this->session->set_userdata('loggedIn',true);
            $this->session->set_userdata('userData',$userData);

           	redirect('home/');

		}

		$data['loginURL'] = $this->google->loginURL();

        //load google login view
        $this->load->view('login',$data);
	}

	public function logout()
	{
		$this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('userData');
        $this->session->sess_destroy();

        //redirect to login page
        redirect('login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */