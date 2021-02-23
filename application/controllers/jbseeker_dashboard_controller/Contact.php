<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	// function __construct(){
		
	// }
	
	
	public function index()
	{
		$this->load->view('jbseeker_dashboard_view/header');
		$this->load->view('jbseeker_dashboard_view/contact');
		$this->load->view('jbseeker_dashboard_view/sidebar');
	}
	
}
