<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nasabahController extends CI_Controller {

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
		$this->load->model('nasabah_model');
	}

	public function index()
	{
		$data['nasabah'] = $this->nasabah_model->getNasabah();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('layout/header');
		$this->load->view('layout/topbar');
		$this->load->view('layout/sidebar');
		$this->load->view('nasabah/index', $data);
		$this->load->view('layout/footer');
	}

	public function edit($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['nasabah'] = $this->nasabah_model->getNasabahById($id);

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('no_telepon','No Telepon','required');
		$this->form_validation->set_rules('no_rekening','No Rekening','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$validation = $this->form_validation->run();

		if ($validation == false) {
			$this->load->view('layout/header');
			$this->load->view('layout/topbar');
			$this->load->view('layout/sidebar');
			$this->load->view('nasabah/edit', $data);
			$this->load->view('layout/footer');
		} else {
			$this->nasabah_model->editNasabah($id);
			redirect('nasabahController');
		}
	}

	public function detail($id)
	{
		$data['nasabah'] = $this->nasabah_model->getNasabahById($id);

		$this->load->view('layout/header');
		$this->load->view('layout/topbar');
		$this->load->view('layout/sidebar');
		$this->load->view('nasabah/detail', $data);
		$this->load->view('layout/footer');
	}

	public function delete($id)
	{
		$this->nasabah_model->deleteNasabah($id);
		redirect('nasabahController');
	}
}
