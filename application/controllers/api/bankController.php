<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'libraries/RestController.php';
require_once APPPATH.'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

class bankController extends RestController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('bank_model');
	}

	public function bank_get()
	{
		$id = $this->get('id');

		if ($id == null) {
			$bank = $this->bank_model->getBank();
		} else {
			$bank = $this->bank_model->getBank($id);
		}
		
		if ($bank) {
			$this->response( $bank, 200 );
		} else {
			$this->response([
				'status' => false,
				'message' => '404 not found'
			], 404);
		}
	}

	public function bank_post()
	{
		$data = [
			'bank' => $this->post('bank'),
			'keterangan' => $this->post('keterangan')
		];

		if ($this->bank_model->addBank($data)) {
			$this->response([
				'status' => true,
				'message' => 'berhasil menambahkan'
			], 201);
		} else {
			$this->response([
				'status' => false,
				'message' => 'gagal menambahkan'
			], 404);
		}
	}

	public function bank_delete()
	{
		$id = $this->delete('id');
		$delete = $this->bank_model->deleteBank($id);

		if ($id == null) {
			$this->response([
				'status' => false,
				'message' => '404 not found'
			], 404);
		} else {
			if ($delete == null) {
				$this->response([
					'status' => true,
					'id' => $id,
					'message' => 'deleted'
				], 200);
			} else {
				$this->response([
					'status' => false,
					'message' => 'id not found'
				], 404);
			}
		}
	}

	public function bank_put()
	{
		$id = $this->put('id');
		$data = [
			'bank' => $this->put('bank'),
			'keterangan' => $this->put('keterangan')
		];

		if ($this->bank_model->editBank($id,$data)) {
			$this->response([
				'status' => true,
				'message' => 'berhasil mengedit'
			], 201);
		} else {
			$this->response([
				'status' => false,
				'message' => 'gagal mengedit'
			], 404);
		}
	}

}

    