<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nasabah_model extends CI_Model {

	public function getNasabah()
	{
		$this->db->order_by('nama','asc');
		return $this->db->get('user')->result_array();
	}

	public function getNasabahById($id)
	{
		return $this->db->get_where('user', ['id' => $id])->row_array();
	}

	public function editNasabah($id)
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'no_rekening' => $this->input->post('no_rekening'),
			'no_telepon' => $this->input->post('no_telepon'),
			'alamat' => $this->input->post('alamat')
		];

		$this->db->where('id',$id);
		$this->db->update('user', $data);
	}

	public function deleteNasabah($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}

}

?>