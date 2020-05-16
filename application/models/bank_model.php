<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bank_model extends CI_Model {

	public function getBank()
	{
		return $this->db->get('bank')->result_array();
	}

	public function getBankById($id)
	{
		return $this->db->get_where('bank', ['id' => $id])->row_array();
	}

	public function addBank($data)
	{
		$data = [
			'bank' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan')
		];

		$this->db->insert('bank',$data);
	}

	public function editBank($id)
	{
		$data = [
			'bank' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan')
		];

		$this->db->where('id',$id);
		$this->db->update('bank', $data);
	}

	public function deleteBank($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('bank');
	}

}

?>