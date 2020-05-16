<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bankController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('bank_model');
	}

	public function index()
	{
		$data['bank'] = $this->bank_model->getBank();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/topbar');
		$this->load->view('bank/index',$data);
		$this->load->view('layout/footer');	
			
	}

	public function add()
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$validation = $this->form_validation->run();

		if ($validation == false) {
			$this->load->view('layout/header');
			$this->load->view('layout/sidebar');
			$this->load->view('layout/topbar');
			$this->load->view('bank/add');
			$this->load->view('layout/footer');
		} else {
			$this->bank_model->addBank($data);
			redirect('bankController');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$validation = $this->form_validation->run();
		$data['bank'] = $this->bank_model->getBankById($id);

		if ($validation == false) {
			$this->load->view('layout/header');
			$this->load->view('layout/sidebar');
			$this->load->view('layout/topbar');
			$this->load->view('bank/edit', $data);
			$this->load->view('layout/footer');
		} else {
			
			$this->bank_model->editBank($id);
			redirect('bankController');
		}
	}

	public function delete($id)
	{
		$this->bank_model->deleteBank($id);
		redirect('bankController');
	}
}
