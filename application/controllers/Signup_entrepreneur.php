<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_entrepreneur extends CI_Controller {

	// function __construct(){
		
	// }
	
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('signup_entrepreneur');
		$this->load->view('footer');
	}
	
}
