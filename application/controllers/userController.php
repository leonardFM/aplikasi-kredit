<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userController extends CI_Controller {

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
		$this->load->model(['pengajuan_model','bank_model']);
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['bank'] = $this->bank_model->getBank();

		$this->load->view('layoutUser/header');
		$this->load->view('layoutUser/sidebar');
		$this->load->view('layoutUser/topbar');
		$this->load->view('user/dashboard',$data);
		$this->load->view('layoutUser/footer');
	}

	public function profil()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('layoutUser/header');
		$this->load->view('layoutUser/sidebar');
		$this->load->view('layoutUser/topbar');
		$this->load->view('user/profil', $data);
		$this->load->view('layoutUser/footer');
	}

	public function editProfil()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('no_telepon','No Telepon','required');
		$this->form_validation->set_rules('no_rekening','No Rekening','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$validation = $this->form_validation->run();

		if ($validation ==  false) {
			$this->load->view('layoutUser/header');
			$this->load->view('layoutUser/sidebar');
			$this->load->view('layoutUser/topbar');
			$this->load->view('user/editProfil',$data);
			$this->load->view('layoutUser/footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'no_rekening' => $this->input->post('no_rekening'),
				'no_telepon' => $this->input->post('no_telepon'),
				'alamat' => $this->input->post('alamat')
			];

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('user', $data);
			redirect('userController/profil');
		}

	} 

	

	public function detail($id)
	{ 
		$this->load->model('pinjam_model');
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['pinjam'] = $this->pinjam_model->count($id);

		$this->load->view('layoutUser/header');
		$this->load->view('layoutUser/sidebar');
		$this->load->view('layoutUser/topbar');
		$this->load->view('user/detail',$data);
		$this->load->view('layoutUser/footer');
	}

	public function formKredit($id=null)
	{
		$this->load->model(['pinjam_model','ajuan_kredit_model','bank_model']);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kredit'] = $this->pinjam_model->kredit($id);
		$data['ajuan'] = $this->ajuan_kredit_model->getAllData();

		$this->form_validation->set_rules('kota','Kota','required');
		$this->form_validation->set_rules('no_rekening','No Rekening','required');
		$validation = $this->form_validation->run();

		if ($validation == false) {
			$this->load->view('layoutUser/header');
			$this->load->view('layoutUser/sidebar');
			$this->load->view('layoutUser/topbar');
			$this->load->view('user/form_kredit',$data);
			$this->load->view('layoutUser/footer');
		} else {
			$data = [
				'nama_id' => $this->input->post('id'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'kota' => $this->input->post('kota'),
				'no_telepon' => $this->input->post('no_telepon'),
				'no_rekening' => $this->input->post('no_rekening'),
				'bank' => $this->input->post('bank'),
				'jumlah_kredit' => $this->input->post('jumlah_kredit'),
				'waktu_cicilan' => $this->input->post('waktu_cicilan'),
				'date_created' => time()
			];

			$this->db->insert('ajuan_kredit', $data);
			redirect('userController');
		}

	}

	public function syarat()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('layoutUser/header');
		$this->load->view('layoutUser/sidebar');
		$this->load->view('layoutUser/topbar');
		$this->load->view('user/syarat',$data);
		$this->load->view('layoutUser/footer');
	}

	public function contohSyarat()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('layoutUser/header');
		$this->load->view('layoutUser/sidebar');
		$this->load->view('layoutUser/topbar');
		$this->load->view('user/contohSyarat',$data);
		$this->load->view('layoutUser/footer');
	}

	public function status($id)
	{
		$this->load->model('ajuan_kredit_model');
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['status'] = $this->ajuan_kredit_model->count($id);

		$this->load->view('layoutUser/header');
		$this->load->view('layoutUser/sidebar');
		$this->load->view('layoutUser/topbar');
		$this->load->view('user/status',$data);
		$this->load->view('layoutUser/footer');
	}
}
