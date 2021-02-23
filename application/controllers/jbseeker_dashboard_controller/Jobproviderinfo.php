<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobproviderinfo extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id')){
			redirect('job_provider/provider');
		}
		$this->load->model('jobproviderinfo_model');
	}
	
	
	public function index()
	{
		
		$data['jobproviderdata'] = $this->jobproviderinfo_model->getAll();
		$this->load->view('jbseeker_dashboard_view/header');
		$this->load->view('jbseeker_dashboard_view/jobproviderinfo_view',$data);
		$this->load->view('jbseeker_dashboard_view/sidebar');
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
