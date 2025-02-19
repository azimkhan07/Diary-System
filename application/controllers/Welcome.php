<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		// var_dump($this->session->userdata('dashboard_user'));die;
		if(!$this->session->userdata('dashboard_user')){
			redirect(base_url('login'));
		}
		$this->load->model('User_model');
		$this->load->model('Cash_model');
		$this->load->model('Profile_model');
	}
	public function index(){
		$data['credits'] = $this->Cash_model->getCreditCount();
		$data['debits'] = $this->Cash_model->getDebitCount();
		$data['user'] = $this->User_model->getUserCount();
		$data['list'] = $this->Cash_model->getCash();
		$this->load->view('dashboard',$data);
	}
	
	public function dashboard(){
		$email = $this->session->userdata('dashboard_user_email');
		$data['user'] = $this->User_model->getUserById($email);
		$id = $data['user']['id'];
		$data['credits'] = $this->Cash_model->getCreditCountById($id);
		$data['debits'] = $this->Cash_model->getDebitCountById($id);
		$data['list'] = $this->Cash_model->getCashById($id);
		$this->load->view('User/dashboard',$data);
	}
	public function userlist(){
		$data['all_record'] = $this->User_model->getData();
		$this->load->view('User/userList',$data);
	}
	public function cashlist(){
		$data['credit'] = $this->Cash_model->getCredit();
		$data['debit'] = $this->Cash_model->getDebit();
		$data['list'] = $this->Cash_model->allData();
		$this->load->view('Cash/cashlist',$data);
	}
	public function addCash(){
		$data['list'] = $this->Cash_model->getCash();
		$data['records'] = $this->User_model->showUsername();
		// print_r($data['record']);die;
		$this->load->view('Cash/addCash',$data);
	}
	public function debitCash(){
		$data['list'] = $this->Cash_model->getCash();
		$data['records'] = $this->User_model->showUsernameForDebit();
		// print_r($data['record']);die;
		$this->load->view('Cash/debitCash',$data);
	}
	public function addUser(){
		$data['all_record'] = $this->User_model->getData();
		$this->load->view('User/addUser',$data);
	}

	function profile(){
		$name = $this->session->userdata('dashboard_user_email');
		$data['profile'] = $this->Profile_model->getData($name);
		$this->load->view('profile',$data);
	}

	function deActiveUserlist(){
		$data['all_record'] = $this->User_model->deActiveUserlist();
		$this->load->view('User/deActiveUserlist',$data);
	}

	function updatePassword(){
		$data['all_record'] = $this->User_model->getData();
		$this->load->view('User/updatePassword',$data);
	}

	function logout(){
		$this->session->unset_userdata('dashboard_user');
		$this->session->unset_userdata('dashboard_name');
		$this->session->unset_userdata('dashboard_user_email');
		redirect(base_url('login'));
	}
}
