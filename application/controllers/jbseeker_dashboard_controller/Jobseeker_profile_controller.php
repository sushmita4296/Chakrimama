<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobseeker_profile_controller extends CI_Controller {
		//news
	function __construct(){
		

		parent::__construct();
		if(!$this->session->userdata('id')){
			redirect('job_seeker/jbseeker');
		}
		$this->load->model('jbseeker_dashboard_model/jobseekerinfo_model');
		
		// $this->load->library('form_validation');
		// $this->load->helper('url','form');
		// $this->load->library('form_validation');
	}
	
	
	public function index()
	{
		$data['jbseekerdata'] = $this->jobseekerinfo_model->getAll();
		$this->load->view('jbseeker_dashboard_view/header');
		$this->load->view('jbseeker_dashboard_view/profile/jobseekerprofile_view', $data);
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
		$data['skill'] = $this->input->post('skill');
		$data['available'] = $this->input->post('available');



		// $this->load->library('upload');
		//  $config['overwrite'] = TRUE;
	 //    $config['upload_path'] = APPPATH.'../assets/upload';

	 //    $config['allowed_types'] = 'gif|jpg|png';
	 //    $config['file_name'] = date(YmdHms).'_'.rand(1,999999);

	 //    $this->upload->initialize($config);
	 //    $this->upload->do_upload('image1');
	 //    $uploaded = $this->upload->data();
	 //    $data['image'] = $uploaded['file_name'];





		$this->jobseekerinfo_model->update($id,$data);
		$this->session->set_flashdata('success','Update successfully');
		redirect('jbseeker_dashboard_controller/jobseeker_profile_controller');
	}
}
