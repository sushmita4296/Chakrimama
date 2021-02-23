<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postview_controller extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id'))
		{
		   redirect('jobseeker/jbseeker');
		}
		$this->load->model('jbseeker_dashboard_model/post_model/entrepreneurpost');
	}
	
	
	public function index()
	{
		
		$data['postdata'] = $this->entrepreneurpost->getAll();
		$this->load->view('jbseeker_dashboard_view/header');
		$this->load->view('jbseeker_dashboard_view/post/entrepreneurpost_view',$data);
		$this->load->view('jbseeker_dashboard_view/sidebar');
	}
	
	
}
