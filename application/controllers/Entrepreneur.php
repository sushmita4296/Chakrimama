<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrepreneur extends CI_Controller {

	public function __construct()
	 {
	  parent::__construct();
	  if($this->session->userdata('id2'))
	  {
	   redirect('entrepreneur_dashboard_controller/entrepreneur_dashboard');
	  }
	 }
	
	
	public function businessman()
	{
		$this->load->view('header');
		$this->load->view('entrepreneur');
		$this->load->view('footer');
	}
	
}
