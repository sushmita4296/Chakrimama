<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_own_post extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id1'))
		{
		   redirect('jobprovider/provider');
		}
		$this->load->model('provider_dashboard_model/View_own_post_model');
		// $this->load->model('provider_dashboard_model/View_own_post_model/');
	}
	
	
	public function index()
	{
		
		$result= $this->View_own_post_model->getAll();
		$email = $result->email;

		$data['postdata']= $this->View_own_post_model->getAllJobPost($email);
		
		$this->load->view('provider_dashboard_view/header');
		$this->load->view('provider_dashboard_view/post/post_view',$data);
		$this->load->view('provider_dashboard_view/sidebar');

		//$data= $this->View_own_post_model->getAllJobPost($email);
		 //print_r($data);die();
	}
	function delete($id)
	{
		$this->View_own_post_model->delete($id);
		$this->session->set_flashdata('success','delete successfully');
		redirect('provider_dashboard_controller/own_post_controller/View_own_post');
	}
	 function edit($id)
	{
		$data['jbproviderdata'] = $this->View_own_post_model->getPost($id);
		$this->load->view('provider_dashboard_view/header');
		$this->load->view('provider_dashboard_view/post/editjobpost_view', $data);
	} 
	public function update($id)
	{
		
		$arr['provider_name'] = $this->input->post('provider_name');
		$arr['email'] = $this->input->post('email');
		$arr['phone'] = $this->input->post('phone');
		$arr['job_position'] = $this->input->post('job_position');
		$arr['requirement'] = $this->input->post('requirement');
		$arr['deadline'] = $this->input->post('deadline');
		$arr['available'] = $this->input->post('available');

		$this->View_own_post_model->update($id,$arr);
		$this->session->set_flashdata('success','Update successfully');
		redirect('provider_dashboard_controller/own_post_controller/view_own_post');

	}
	
	
}
