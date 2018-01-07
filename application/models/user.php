<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	 public function checkUser($data = [])
	 {
	 	$this->db->select('id');
	 	$this->db->from('user');
	 	$this->db->where(array('google' => $data['Google'], 'id' => $data['id']));
	 	$result = $this->db->get();
	 	$row = $result->num_rows();

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

}

/* End of file user.php */
/* Location: ./application/models/user.php */