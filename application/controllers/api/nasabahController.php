<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'libraries/RestController.php';
require_once APPPATH.'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

class nasabahController extends RestController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('nasabah_model');
	}

	public function nasabah_get()
	{
		$id = $this->get('id');

		if ($id == null) {
			$nasabah = $this->nasabah_model->getNasabah();
		} else {
			$nasabah = $this->nasabah_model->getNasabah($id);
		}
		
		if ($nasabah) {
			$this->response( $nasabah, 200 );
		} else {
			$this->response([
				'status' => false,
				'message' => '404 not found'
			], 404);
		}
	}

	public function nasabah_delete()
	{
		$id = $this->delete('id');
		$delete = $this->nasabah_model->deleteNasabah($id);

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

}

    