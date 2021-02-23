<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect('dashboard/Login');
		}
	}
	
	
	public function index()
	{
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/dashboard_home');
		$this->load->view('dashboard/sidebar');
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('dashboard/Login');
	}
	
	
}
