<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin')){
			redirect('dashboard/Admin');
		}
	}
	
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('dashboard/login');
		// $this->load->view('footer');
		// $this->load->view('dashboard/header');
		// $this->load->view('dashboard/sidebar');
	}
	function login(){
		$this->load->model('admin');
		$check = $this->admin->validate();
		if ($check) {
			$this->session->set_userdata('admin','1');
			redirect('dashboard/Admin');
		}
		else{
			redirect('dashboard/Login');
			// echo "incorrect";
		}
	}
	
}
