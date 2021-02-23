<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_own_post extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id2'))
		{
			redirect('entrepreneur/businessman');
		}
		$this->load->model('entrepreneur_dashboard_model/View_own_post_model');
		// $this->load->model('provider_dashboard_model/View_own_post_model/');
	}
	
	
	public function index()
	{
		
		$result= $this->View_own_post_model->getAll();
		$email = $result->email;

		$data['postdata']= $this->View_own_post_model->getAllJobPost($email);
		
		$this->load->view('entrepreneur_dashboard_view/header');
		$this->load->view('entrepreneur_dashboard_view/post/own_post_view',$data);
		$this->load->view('entrepreneur_dashboard_view/sidebar');

		//$data= $this->View_own_post_model->getAllJobPost($email);
		 //print_r($data);die();
	}
	function delete($id)
	{
		$this->View_own_post_model->delete($id);
		$this->session->set_flashdata('success','delete successfully');
		redirect('entrepreneur_dashboard_controller/own_post_controller/View_own_post');
	} 
	// new code have to change by my need
	 function edit($id)
	{
		$data['jbproviderdata'] = $this->View_own_post_model->getPost($id);
		$this->load->view('entrepreneur_dashboard_view/header');
		$this->load->view('entrepreneur_dashboard_view/post/editentrepreneurpost_view', $data);
	} 
	public function update($id)
	{
		
		$arr['entrepreneur_name'] = $this->input->post('entrepreneur_name');
		$arr['email'] = $this->input->post('email');
		$arr['phone'] = $this->input->post('phone');
		$arr['product_name'] = $this->input->post('product_name');
		$arr['product_details'] = $this->input->post('product_details');
		$arr['price'] = $this->input->post('price');
		// $arr['deadline'] = $this->input->post('deadline');

		$this->View_own_post_model->update($id,$arr);
		$this->session->set_flashdata('success','Update successfully');
		redirect('entrepreneur_dashboard_controller/own_post_controller/view_own_post');

	}	
	
}
