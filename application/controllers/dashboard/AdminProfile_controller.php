<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProfile_controller extends CI_Controller {
		//news
	function __construct(){
		

		parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect('dashboard/Login');
		}
		$this->load->model('admininfo_model');
		
		// $this->load->library('form_validation');
		// $this->load->helper('url','form');
		// $this->load->library('form_validation');
	}
	
	
	public function index()
	{
		$data['admindata'] = $this->admininfo_model->getAll();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/admin_profile/AdminProfile_view', $data);
		// $this->load->view('footer');
	}
	function update($id)
	{
		$this->admininfo_model->update($id);
		$this->session->set_flashdata('success','Update successfully');
		redirect('dashboard/adminProfile_controller');
	}
}
