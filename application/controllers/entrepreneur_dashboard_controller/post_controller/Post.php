<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id2')){
			redirect('entrepreneur/businessman');
		}
		$this->load->model('entrepreneur_dashboard_model/post_model/entrepreneur_post_model');
	}
	
	
	public function index()
	{
		$this->entrepreneur_post_model->save();
		$this->session->set_flashdata('success','Successfully Post');
		redirect('entrepreneur_dashboard_controller/post_controller/entrepreneur_post_controller');
	}
	
}
