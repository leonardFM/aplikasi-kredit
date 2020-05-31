<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'libraries/RestController.php';
require_once APPPATH.'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

class pengajuanController extends RestController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajuan_model');
	}

	public function pengajuan_get()
	{
		$id = $this->get('id');

		if ($id == null) {
			$pengajuan = $this->pengajuan_model->getPengajuan();
		} else {
			$pengajuan = $this->pengajuan_model->getPengajuan($id);
		}
		
		if ($pengajuan) {
			$this->response( $pengajuan, 200 );
		} else {
			$this->response([
				'status' => false,
				'message' => '404 not found'
			], 404);
		}
		
	}

}

    