<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_post_controller extends CI_Controller {
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id1')){
			redirect('job_provider/provider');
		}
		//$this->load->model('jobproviderinfo_model');//model name change kortam
	}
	
	
	public function index()
	{
		$this->load->view('provider_dashboard_view/header');
		$this->load->view('provider_dashboard_view/post/jobpostform');
		$this->load->view('provider_dashboard_view/sidebar');
	}
	// function edit_view($id)
	// {
	// 	$data['jobproviderdata'] = $this->jobproviderinfo_model->getById($id);
	// 	// $this->load->view('admin/news/edit',$data);
	// 	$this->load->view('dashboard/header');
	// 	$this->load->view('dashboard/jobprovidercrud/edit_view',$data);
	// }

	// function update($id)
	// {
	// 	$this->jobproviderinfo_model->update($id);
	// 	$this->session->set_flashdata('success','Update successfully');
	// 	redirect('dashboard/jobproviderinfo');
	// }
	// function delete($id)
	// {
	// 	$this->jobproviderinfo_model->delete($id);
	// 	$this->session->set_flashdata('success','delete successfully');
	// 	redirect('dashboard/jobproviderinfo');
	// } 
	
}
