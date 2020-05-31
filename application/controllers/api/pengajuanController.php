<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class pengajuanController extends RestController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('nasabah_model');
	}

	public function nasabah_get()
	{
		$nasabah = $this->nasabah_model->getNasabah();
		var_dump($nasabah);
	}

}

    