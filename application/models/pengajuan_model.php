<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengajuan_model extends CI_Model {

	public function getPengajuan()
	{
		$this->db->select('a.*, b.bank as nama_bank');
		$this->db->from('pengajuan as a');
		$this->db->join('bank as b', 'a.bank_id = b.id');
		return $this->db->get()->result_array();
	}

	public function getPengajuanById($id)
	{
		$this->db->select('a.*, b.bank as nama_bank');
		$this->db->from('pengajuan as a');
		$this->db->join('bank as b', 'a.bank_id = b.id');
		return $this->db->get_where('pengajuan', ['a.id' => $id])->row_array();
	}

	public function addPengajuan()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'no_telepon' => $this->input->post('no_telepon'),
			'no_rekening' => $this->input->post('no_rekening'),
			'bank_id' => $this->input->post('bank'),
			'nominal' => $this->input->post('nominal'),
			'waktu' => $this->input->post('waktu'),
			'keterangan' => $this->input->post('keterangan'),
			'status' => 0
		];

		$this->db->insert('pengajuan',$data);
	}

	public function setujuPengajuan($id)
	{
		$this->db->set('status', 1);
		$this->db->where('id', $id);
		$this->db->update('pengajuan');
	}

	public function batalPengajuan($id)
	{
		$this->db->set('status', 0);
		$this->db->where('id', $id);
		$this->db->update('pengajuan');
	}
}