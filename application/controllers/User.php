<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {

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
		$this->load->model('User_model');
	 }
	 public function addUser()
	{
		$status = $this->User_model->addUser();
        if($status){
			$this->session->set_flashdata('msg', "User Created successfully");
			$this->session->set_flashdata('class', "alert-success");
		}else{
			$this->session->set_flashdata('msg', "User Not Created");
			$this->session->set_flashdata('class', "alert-danger");
		}
		redirect(base_url('addUser'));
	}
	public function getUserById(){
		echo json_encode($this->User_model->showData($this->input->get('id')));
	}

	public function updatePassword(){
		$id = $this->input->post('modalInput');
		$pass = $this->input->post('pass');
		$status = $this->User_model->updatePassword($pass,$id);
		if ($status) {
			redirect(base_url('userlist'));
		}else {
			redirect(base_url('updatePassword'));
		}
	}
	public function getPassword(){
		echo json_encode($this->User_model->getPassword($this->input->get('id')));
	}

	public function deActiveUser(){
		$id = $this->input->get('id');
		
		$status = $this->User_model->deActiveUser($id);
		if ($status){
			echo "success";
		}else {
			echo "fail";
		}
	}

	public function activeUser(){
		$id = $this->input->get('id');
		
		$status = $this->User_model->activeUser($id);
		if ($status){
			echo "success";
		}else {
			echo "fail";
		}
	}
}
