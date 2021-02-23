<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobseeker extends CI_Controller {

	public function __construct()
	 {
	  parent::__construct();
	  if($this->session->userdata('id'))
	  {
	   redirect('jbseeker_dashboard_controller/jbseeker_dashboard');
	  }
	 }
	
	
	public function jbseeker()
	{
		$this->load->view('header');
		$this->load->view('jobseeker');
		$this->load->view('footer');
	}
	
}
