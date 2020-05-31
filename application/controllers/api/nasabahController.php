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

}

    