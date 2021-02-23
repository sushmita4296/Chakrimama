<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password_provider extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id1'))
		{
			redirect('jobprovider/provider');
		}
		 $this->load->library('form_validation');
  		 $this->load->library('encryption');
		$this->load->model('provider_dashboard_model/changepass_providerinfo');
		
	}
	function index(){
		$data['changepassdata']= $this->changepass_providerinfo->getAll();
		
		$this->load->view('provider_dashboard_view/header');
		// $this->load->view('dashboard/admin_profile/changepass_view');
		$this->load->view('provider_dashboard_view/profile/changepass_view', $data);
		// $this->load->view('provider_dashboard_view/side');
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
			
			$result = $this->changepass_providerinfo->getAll();
			// $adminpass= $result->password;
			$adminpass=$this->encryption->decrypt($result->password);
			$id=$result->id;

			if ($adminpass == $curr_Pass) {
				if($new_Pass == $conf_Pass){
					if($this->changepass_providerinfo->changepass($id)){
						$this->session->set_flashdata("message","Password Change Success");
					 redirect('provider_dashboard_controller/provider_dashboard/logout');
					}
					else{
						$this->session->set_flashdata("message","failed to Change the Password");
					 redirect('provider_dashboard_controller/change_password_provider');
					}
				}
				else{
					 $this->session->set_flashdata("message","Confirm Password is not match with New Password");
					 redirect('provider_dashboard_controller/change_password_provider');
				}
			}
			else{
				 $this->session->set_flashdata("message","Current Password Is Wrong");
				 redirect('provider_dashboard_controller/change_password_provider');
			}
			// echo $userid;
			// print_r($result);
			// exit();
			// echo "form_validation success";
		}
		else{
			// echo validation_errors();
			$this->session->set_flashdata("message","validation Error.");
			redirect('provider_dashboard_controller/change_password_provider');
		}

	}

	
}
