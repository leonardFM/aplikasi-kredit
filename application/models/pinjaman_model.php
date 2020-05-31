<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pinjaman_model extends CI_Model {

	public function getPinjaman($id = null)
	{
		if ($id == null) {
			$this->db->select('a.*, b.bank as nama_bank');
			$this->db->from('pinjaman as a');
			$this->db->join('bank as b', 'a.bank_id = b.id');
			$this->db->order_by('bank_id','asc');
			$this->db->order_by('nominal','asc');
			return $this->db->get()->result_array();
		} else {
			return $this->db->get_where('pinjaman', ['id' => $id])->result_array();
		}
	}

	public function getPinjamanById($id)
	{
		$this->db->select('a.*, b.bank as nama_bank');
		$this->db->from('pinjaman as a');
		$this->db->join('bank as b', 'a.bank_id = b.id');
		return $this->db->get_where('pinjaman', ['a.id' => $id])->row_array();
	}

	public function addTipePinjaman()
	{
		$data = [
			'bank_id' => $this->input->post('bank'),
			'nominal' => $this->input->post('nominal'),
			'waktu' => $this->input->post('waktu')
		];

		$this->db->insert('pinjaman', $data);
	}

	public function editTipePinjaman($id)
	{
		$data = [
			'bank_id' => $this->input->post('bank'),
			'nominal' => $this->input->post('nominal'),
			'waktu' => $this->input->post('waktu')
		];
		
		$this->db->where('id',$id);
		$this->db->update('pinjaman', $data);
	}

	public function deleteTipePinjaman($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pinjaman');
	}


}

?>