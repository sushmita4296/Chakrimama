<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jbseeker_dashboard extends CI_Controller {

	public function __construct()
	 {
	  parent::__construct();
	  if(!$this->session->userdata('id'))
	  {
	   redirect('jobseeker/jbseeker');
	  }
	 }
	
	
	public function index()
	{
		$this->load->view('jbseeker_dashboard_view/header');
		$this->load->view('jbseeker_dashboard_view/dashboard_home');
		$this->load->view('jbseeker_dashboard_view/sidebar');
	}
	// function logout()
	// {
	// 	$this->session->sess_destroy();
	// 	redirect('dashboard/Login');
	// }
	function logout()
	{
		$data = $this->session->all_userdata();
		foreach($data as $row => $rows_value)
		{
			$this->session->unset_userdata($row);
		}
		redirect('jobseeker/jbseeker');
		}
	}
	
// }
