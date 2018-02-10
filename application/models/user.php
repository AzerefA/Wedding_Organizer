<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	 public function checkUser($data = [])
	 {
	 	$this->db->select('id');
	 	$this->db->from('user');
	 	$this->db->where(array('google' => $data['Google'], 'id' => $data['id']));
	 	$query = $this->db->get();
	 	$row = $query->num_rows();

	 	if ($row > 0) {
	 		$result = $query->row_array();
            $update = $this->db->update('user', $data, array('id' => $result['id']));
            $userID = $result['id'];
	 	}else{
            $insert = $this->db->insert('user', $data);
            $userID = $this->db->insert_id();
	 	}

	 	return $userID ? $userID : false;

	 }

    public function cek_user($email,$pass)
    {
        
        $query = $this->db->where('email',$email)
            ->where('password',$pass)
            ->get('user')
            ->row_array();

        
        if (!empty($query)){
            $userData = array(
                'userData' => $query,
                'loggedIn'=> true
                );
            $this->session->set_userdata($userData);

            return true;
        }else{
            return false;
        }
    }

    public function tambahUser($data = array())
    {
        $this->db->insert('user',$data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

}

/* End of file user.php */
/* Location: ./application/models/user.php */