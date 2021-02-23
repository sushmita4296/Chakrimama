<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobprovider_profile_controller extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id1'))
		{
			redirect('jobprovider/provider');
		}
		$this->load->model('provider_dashboard_model/jobproviderinfo_model');
		
		// $this->load->library('form_validation');
		// $this->load->helper('url','form');
		// $this->load->library('form_validation');
	}
	
	
	public function index()
	{
		$data['jbproviderdata'] = $this->jobproviderinfo_model->getAll();
		$this->load->view('provider_dashboard_view/header');
		$this->load->view('provider_dashboard_view/profile/jobproviderprofile_view', $data);
		// $this->load->view('footer');
	}
	function update($id)
	{
		$data['first_name'] = $this->input->post('firstName');
		$data['last_name'] = $this->input->post('lastName');
		$data['username'] = $this->input->post('userName');
		// $arr['password'] = $this->input->post('phone');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['current_address'] = $this->input->post('Currentaddress');
		$data['permanent_address'] = $this->input->post('Permanentaddress');
		$data['age'] = $this->input->post('age');
		// $data['skill'] = $this->input->post('skill');



		// $this->load->library('upload');
		//  $config['overwrite'] = TRUE;
	 //    $config['upload_path'] = APPPATH.'../assets/upload';

	 //    $config['allowed_types'] = 'gif|jpg|png';
	 //    $config['file_name'] = date(YmdHms).'_'.rand(1,999999);

	 //    $this->upload->initialize($config);
	 //    $this->upload->do_upload('image1');
	 //    $uploaded = $this->upload->data();
	 //    $data['image'] = $uploaded['file_name'];





		$this->jobproviderinfo_model->update($id,$data);
		$this->session->set_flashdata('success','Update successfully');
		redirect('provider_dashboard_controller/jobprovider_profile_controller');
	}
}
