<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	public function getUser()
	{
		return $this->db->get('user')->result_array();
	}

	public function getUserById($id)
	{
		return $this->db->get_where('user', ['id' => $id])->row_array();
	}

}

?>