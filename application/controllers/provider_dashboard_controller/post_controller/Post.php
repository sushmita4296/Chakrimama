<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id1')){
			redirect('job_provider/provider');
		}
		$this->load->model('provider_dashboard_model/post_model/job_post_model');
	}
	
	
	public function index()
	{
		$this->job_post_model->save();
		$this->session->set_flashdata('success','Successfully Post a job');
		redirect('provider_dashboard_controller/post_controller/job_post_controller');
	}
	
}
