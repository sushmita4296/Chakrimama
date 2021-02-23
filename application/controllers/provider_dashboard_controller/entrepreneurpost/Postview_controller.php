<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postview_controller extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id1'))
		{
		  redirect('jobprovider/provider');
		}
		$this->load->model('provider_dashboard_model/post_model/entrepreneurpost');
	}
	
	
	public function index()
	{
		
		$data['postdata'] = $this->entrepreneurpost->getAll();
		$this->load->view('provider_dashboard_view/header');
		$this->load->view('provider_dashboard_view/post/entrepreneurpost_view',$data);
		$this->load->view('provider_dashboard_view/sidebar');
	}
	
	
}
