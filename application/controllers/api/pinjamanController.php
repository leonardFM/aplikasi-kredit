<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'libraries/RestController.php';
require_once APPPATH.'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

class pinjamanController extends RestController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pinjaman_model');
	}

	public function pinjaman_get()
	{
		$id = $this->get('id');

		if ($id == null) {
			$pinjaman = $this->pinjaman_model->getPinjaman();
		} else {
			$pinjaman = $this->pinjaman_model->getPinjaman($id);
		}
		
		if ($pinjaman) {
			$this->response( $pinjaman, 200 );
		} else {
			$this->response([
				'status' => false,
				'message' => '404 not found'
			], 404);
		}
		
	}

}

    