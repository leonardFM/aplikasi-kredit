<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengajuanController extends CI_Controller {

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
		$this->load->model(['pengajuan_model', 'pinjaman_model']);
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pengajuan'] = $this->pengajuan_model->getPengajuan();
		

		$this->load->view('layout/header');
		$this->load->view('layout/topbar');
		$this->load->view('layout/sidebar');
		$this->load->view('pengajuan/index', $data);
		$this->load->view('layout/footer');
	}

	public function detail($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pengajuan'] = $this->pengajuan_model->getPengajuanById($id);

		$this->load->view('layout/header');
		$this->load->view('layout/topbar');
		$this->load->view('layout/sidebar');
		$this->load->view('pengajuan/detailPengajuan', $data);
		$this->load->view('layout/footer');
	}

	public function setuju($id)
	{
		$this->pengajuan_model->setujuPengajuan($id);
		redirect('pengajuanController');
	}

	public function batal($id)
	{
		$this->pengajuan_model->batalPengajuan($id);
		redirect('pengajuanController');
	}

	public function form($id)
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('no_telepon','No Telepon','required');
		$this->form_validation->set_rules('no_rekening','No Rekening','required');
		$this->form_validation->set_rules('keterangan','Alasan Peminjaman','required');
		$validation = $this->form_validation->run();

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pinjaman'] = $this->pinjaman_model->getPinjamanById($id);
		
		if ($validation == false) {
			$this->load->view('layoutUser/header');
			$this->load->view('layoutUser/topbar');
			$this->load->view('layoutUser/sidebar');
			$this->load->view('pengajuan/form_kredit', $data);
			$this->load->view('layoutUser/footer');
		} else {
			$this->pengajuan_model->addPengajuan($data);
			redirect('userController');
		}

	}

}
