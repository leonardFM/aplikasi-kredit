<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipePinjamanController extends CI_Controller {

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
		$this->load->model(['pinjaman_model','bank_model']);
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('bank_model');
		$data['pinjaman'] = $this->pinjaman_model->getPinjaman();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/topbar');
		$this->load->view('tipe_pinjaman/index', $data);
		$this->load->view('layout/footer');
	}

	public function add()
	{
		$this->form_validation->set_rules('nominal','Nominal','required');
		$this->form_validation->set_rules('waktu','Waktu','required');
		$validation = $this->form_validation->run();

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pinjaman'] = $this->pinjaman_model->getPinjaman();
		$data['bank'] = $this->bank_model->getBank();

		if ($validation == false) {
			$this->load->view('layout/header');
			$this->load->view('layout/sidebar');
			$this->load->view('layout/topbar');
			$this->load->view('tipe_pinjaman/add', $data);
			$this->load->view('layout/footer');
		} else {
			$this->pinjaman_model->addTipePinjaman($data);
			redirect('tipePinjamanController');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nominal','Nominal','required');
		$this->form_validation->set_rules('waktu','Waktu','required');
		$validation = $this->form_validation->run();

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pinjaman'] = $this->pinjaman_model->getPinjamanById($id);
		$data['bank'] = $this->bank_model->getBank();

		if ($validation == false) {
			$this->load->view('layout/header');
			$this->load->view('layout/sidebar');
			$this->load->view('layout/topbar');
			$this->load->view('tipe_pinjaman/edit', $data);
			$this->load->view('layout/footer');
		} else {
			$this->pinjaman_model->editTipePinjaman($id);
			redirect('tipePinjamanController');
		}
	}

	public function detail($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('bank_model');
		$data['pinjaman'] = $this->pinjaman_model->getPinjamanById($id);

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/topbar');
		$this->load->view('tipe_pinjaman/detailTipePeminjaman', $data);
		$this->load->view('layout/footer');
	}

	public function delete($id)
	{
		$this->pinjaman_model->deleteTipePinjaman($id);
		redirect('tipePinjamanController');
	} 
}
