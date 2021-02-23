<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// function __construct(){
		
	// }
	
	
	public function homepage()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	
}
