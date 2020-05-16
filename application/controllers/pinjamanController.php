<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pinjamanController extends CI_Controller {

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
		$this->load->model(['bank_model','pinjaman_model']);
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		
		$this->load->view('layoutUser/header');
		$this->load->view('layoutUser/sidebar');
		$this->load->view('layoutUser/topbar');
		$this->load->view('pinjaman/index', $data);
		$this->load->view('layoutUser/footer');
	}

	public function peminjaman()
	{	
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('layoutUser/header');
		$this->load->view('layoutUser/sidebar');
		$this->load->view('layoutUser/topbar');
		$this->load->view('pinjaman/peminjaman', $data);
		$this->load->view('layoutUser/footer');	
	}

	public function ukm()
	{	
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pinjaman'] = $this->pinjaman_model->getPinjaman();

		$this->load->view('layoutUser/header');
		$this->load->view('layoutUser/sidebar');
		$this->load->view('layoutUser/topbar');
		$this->load->view('pinjaman/ukm', $data);
		$this->load->view('layoutUser/footer');	
	}

	public function bisnis()
	{	
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pinjaman'] = $this->pinjaman_model->getPinjaman();
		
		$this->load->view('layoutUser/header');
		$this->load->view('layoutUser/sidebar');
		$this->load->view('layoutUser/topbar');
		$this->load->view('pinjaman/bisnis', $data);
		$this->load->view('layoutUser/footer');	
	}
}
