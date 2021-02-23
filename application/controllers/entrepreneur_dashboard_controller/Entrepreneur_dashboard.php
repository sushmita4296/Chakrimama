<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrepreneur_dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id2'))
		{
			redirect('entrepreneur/businessman');
		}
	}
	
	
	public function index()
	{
		$this->load->view('entrepreneur_dashboard_view/header');
		$this->load->view('entrepreneur_dashboard_view/dashboard_home');
		$this->load->view('entrepreneur_dashboard_view/sidebar');
	}
	function logout()
	{
		$data = $this->session->all_userdata();
		foreach($data as $row => $rows_value)
		{
			$this->session->unset_userdata($row);
		}
		redirect('entrepreneur/businessman');
	}
}
	
	


