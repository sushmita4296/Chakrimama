<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobprovider extends CI_Controller {

	public function __construct()
	 {
	  parent::__construct();
	  if($this->session->userdata('id1'))
	  {
	   redirect('provider_dashboard_controller/provider_dashboard');
	  }
	 }
	
	
	public function provider()
	{
		$this->load->view('header');
		$this->load->view('jobprovider');
		$this->load->view('footer');
	}
	
}
