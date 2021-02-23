<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postview_controller extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id2'))
		{
			redirect('entrepreneur/businessman');
		}
		$this->load->model('entrepreneur_dashboard_model/post_model/postdata');
	}
	
	
	public function index()
	{
		
		$data['postdata'] = $this->postdata->getAll();
		$this->load->view('entrepreneur_dashboard_view/header');
		$this->load->view('entrepreneur_dashboard_view/post/post_view',$data);
		$this->load->view('entrepreneur_dashboard_view/sidebar');
	}
	
}
