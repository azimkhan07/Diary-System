<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

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

		// if (!$this->session->userdata('dashboard_user')) {
		// 	return redirect(base_url('index.php/welcome/login'));
		// }
		$this->load->model('Login_model');
	}
	// Dashboard Link =========================================================================
	public function index()
	{
		// echo 'done';die;
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		// print_r($password);die;
		
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		// var_dump($this->form_validation->run());die;
		if ($this->form_validation->run() === false) {
			// echo validation_errors();die;
			$this->session->set_flashdata('Login_failed', 'Invalid email or mobile no / Password');
			$this->load->view('login');
		} else {
			
			// $id = $_SESSION['dashboard_user'];
			$validate_user = $this->Login_model->isvalidate($email, $password);
			// print_r($validate_user);die;
			if ($validate_user != null) {
				$login_id = $validate_user['id'];
				$name = $validate_user['name'];
				$email = $validate_user['email'];
				$this->session->set_userdata('dashboard_user', $login_id);
				$this->session->set_userdata('dashboard_name', $name);
				$this->session->set_userdata('dashboard_user_email', $email);
				// echo $email;die;
				if($email == 'admin@diary.com'){
					redirect(base_url());
				} else{
					redirect(base_url('dashboard'));
				}
			}
			$this->load->view('login');
		}
	}
	function login(){
		$this->load->view('login');
	}
}
