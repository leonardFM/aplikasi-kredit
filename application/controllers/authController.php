<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authController extends CI_Controller {

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
	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|matches[conf_password]');
		$this->form_validation->set_rules('conf_password', 'Password', 'required|matches[password]');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$validation = $this->form_validation->run();

		if ($validation == false) {
			$this->load->view('auth/register');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'no_telepon' => $this->input->post('telepon'),
				'alamat' => $this->input->post('alamat'),
				'status' => 0,
				'role_id' => 2,
			];

			// $this->db->insert('user', $data);
			$this->_sendEmail();

			redirect('authController/login');
		}
	}

	private function _sendEmail()
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'leonardfredsmorin3@gmail.com',
			'smtp_pass' => 'korem173pvb',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->load->library('email', $config);

		$this->email->from('leonardfredsmorin3@gmail.com','Leonard Morin');
		$this->email->to('leobaru39@gmail.com');
		$this->email->subject('test email');
		$this->email->message('hello');

		if ($this->email->send()) {
			return true;
		} else {
			$this->email->print_debugger();
			die;
		}

	}




	public function login()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$validation = $this->form_validation->run();


		if ($validation == false) {
			$this->load->view('auth/login');
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('user', ['email' => $email])->row_array();

			if (password_verify($password, $user['password'])) {
				$session = [
					'email' => $user['email'],
					'role_id' => $user['role_id']
				];

				$this->session->set_userdata($session);

				if ($user['role_id'] == 1) {
					redirect('adminController');
				} else {
					redirect('userController');
				} 
			}
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		redirect('authController/login');
	}

	public function forget_password()
	{
		$this->load->view('auth/forgetPassword');
	}

	

}
