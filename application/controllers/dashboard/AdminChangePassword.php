<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminChangePassword extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();

		
		if(!$this->session->userdata('admin')){
			redirect('dashboard/Login');
		}
		$this->load->model('admininfo_model');
		// $this->load->library("form_validation");
	}
	function index(){
		$data['changepassdata']= $this->admininfo_model->getAll();
		
		$this->load->view('dashboard/header');
		// $this->load->view('dashboard/admin_profile/changepass_view');
		$this->load->view('dashboard/admin_profile/changepass_view', $data);
		$this->load->view('footer');
	}
	public function validate(){
		// $this->form_validation()->set_rules();
		//echo "hello";
		$this->form_validation->set_rules('CurrentPass', 'Current Password','required');
		$this->form_validation->set_rules('NewPass', 'New Password','required');
		$this->form_validation->set_rules('ConfirmPass', 'Confirm Password', 'required|matches[NewPass]');


		if($this->form_validation->run())
		{
			$curr_Pass = $this->input->post('CurrentPass');
			$new_Pass = $this->input->post('NewPass');
			$conf_Pass = $this->input->post('ConfirmPass');
			
			$result = $this->admininfo_model->getAll();
			$adminpass=$result->password;
			$id=$result->id;
			if ($adminpass == $curr_Pass) {
				if($new_Pass == $conf_Pass){
					if($this->admininfo_model->changepass($id)){
						$this->session->set_flashdata("message","Password Change Success");
					 redirect('dashboard/Admin/logout');
					}
					else{
						$this->session->set_flashdata("message","failed to Change the Password");
					 redirect('dashboard/AdminChangePassword');
					}
				}
				else{
					 $this->session->set_flashdata("message","Confirm Password is not match with New Password");
					 redirect('dashboard/AdminChangePassword');
				}
			}
			else{
				 $this->session->set_flashdata("message","Current Password Is Wrong");
				 redirect('dashboard/AdminChangePassword');
			}
			// echo $userid;
			// print_r($result);
			// exit();
			// echo "form_validation success";
		}
		else{
			// echo validation_errors();
			$this->session->set_flashdata("message","validation Error.");
			redirect('dashboard/AdminChangePassword');
		}

	}

	
}
