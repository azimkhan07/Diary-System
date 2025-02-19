<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cash extends CI_Controller {

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
		if(!$this->session->userdata('dashboard_user')){
			redirect(base_url('login'));
		}
		$this->load->model('Cash_model');
	 }
	 public function addCash()
	{
		$status = $this->Cash_model->addCash();
        if($status){
			$this->session->set_flashdata('msg', "User Created successfully");
			$this->session->set_flashdata('class', "alert-success");
		}else{
			$this->session->set_flashdata('msg', "User Not Created");
			$this->session->set_flashdata('class', "alert-danger");
		}
		redirect(base_url('addCash'));
	}

	public function debitCash()
	{
		$status = $this->Cash_model->debitCash();
        if($status){
			$this->session->set_flashdata('msg', "User Created successfully");
			$this->session->set_flashdata('class', "alert-success");
		}else{
			$this->session->set_flashdata('msg', "User Not Created");
			$this->session->set_flashdata('class', "alert-danger");
		}
		redirect(base_url('debitCash'));
	}

	function checkCash() {
		$id = $this->input->get('id');
		echo json_encode($this->Cash_model->checkCash($id));
	}
	
	
	
}
