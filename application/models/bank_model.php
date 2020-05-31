<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bank_model extends CI_Model {

	public function getBank($id = null)
	{
		if ($id == null) {
			return $this->db->get('bank')->result_array();
		} else {
			return $this->db->get_where('bank', ['id' => $id])->result_array();
		}
	}

	public function getBankById($id)
	{
		return $this->db->get_where('bank', ['id' => $id])->row_array();
	}

	public function addBank($data)
	{
		return $this->db->insert('bank', $data);
	}

	public function editBank($id, $data)
	{
		$this->db->where('id',$id);
		return $this->db->update('bank', $data);
	}

	public function deleteBank($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('bank');
	}

}

?>