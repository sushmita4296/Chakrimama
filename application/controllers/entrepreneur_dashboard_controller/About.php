<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	// function __construct(){
		
	// }
	
	
	public function index()
	{
		$this->load->view('entrepreneur_dashboard_view/header');
		$this->load->view('entrepreneur_dashboard_view/about');
		$this->load->view('entrepreneur_dashboard_view/sidebar');
	}
	
}
