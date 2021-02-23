<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postview_controller extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect('dashboard/Login');
		}
		$this->load->model('admin_post_model/postdata');
	}
	
	
	public function index()
	{
		
		$data['postdata'] = $this->postdata->getAll();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/post/post_view',$data);
		$this->load->view('dashboard/sidebar');
	}
	
	
}
