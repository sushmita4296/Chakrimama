<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrepreneurinfo extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id'))
		{
		   redirect('jobseeker/jbseeker');
		}
		$this->load->model('entrepreneurinfo_model');
	}
	
	
	public function index()
	{
		
		$data['entrepreneurdata'] = $this->entrepreneurinfo_model->getAll();
		$this->load->view('jbseeker_dashboard_view/header');
		$this->load->view('jbseeker_dashboard_view/entrepreneurinfo_view',$data);
		$this->load->view('jbseeker_dashboard_view/sidebar');
	}
	// function edit_view($id)
	// {
	// 	$data['entrepreneurdata'] = $this->entrepreneurinfo_model->getById($id);
	// 	// $this->load->view('admin/news/edit',$data);
	// 	$this->load->view('dashboard/header');
	// 	$this->load->view('dashboard/entrepreneurcrud/edit_view',$data);
	// }

	// function update($id)
	// {
	// 	$this->entrepreneurinfo_model->update($id);
	// 	$this->session->set_flashdata('success','Update successfully');
	// 	redirect('dashboard/entrepreneurinfo');
	// }
	// function delete($id)
	// {
	// 	$this->entrepreneurinfo_model->delete($id);
	// 	$this->session->set_flashdata('success','delete successfully');
	// 	redirect('dashboard/entrepreneurinfo');
	// } 
	
}
