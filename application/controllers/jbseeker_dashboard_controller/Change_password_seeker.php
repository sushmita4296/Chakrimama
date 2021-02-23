<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password_seeker extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id'))
		{
		   redirect('jobseeker/jbseeker');
		}
		$this->load->model('jbseeker_dashboard_model/changepass_seekerinfo');
		 $this->load->library('form_validation');
  		 $this->load->library('encryption');
	}
	function index(){
		$data['changepassdata']= $this->changepass_seekerinfo->getAll();
		
		$this->load->view('jbseeker_dashboard_view/header');
		// $this->load->view('dashboard/admin_profile/changepass_view');
		$this->load->view('jbseeker_dashboard_view/profile/changepass_view', $data);
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
			
			$result = $this->changepass_seekerinfo->getAll();
			// $adminpass= $result->password;
			$adminpass=$this->encryption->decrypt($result->password);
			$id=$result->id;

			if ($adminpass == $curr_Pass) {
				if($new_Pass == $conf_Pass){
					if($this->changepass_seekerinfo->changepass($id)){
						$this->session->set_flashdata("message","Password Change Success");
					 redirect('jbseeker_dashboard_controller/jbseeker_dashboard/logout');
					}
					else{
						$this->session->set_flashdata("message","failed to Change the Password");
					 redirect('jbseeker_dashboard_controller/change_password_seeker');
					}
				}
				else{
					 $this->session->set_flashdata("message","Confirm Password is not match with New Password");
					 redirect('jbseeker_dashboard_controller/change_password_seeker');
				}
			}
			else{
				 $this->session->set_flashdata("message","Current Password Is Wrong");
				 redirect('jbseeker_dashboard_controller/change_password_seeker');
			}
			// echo $userid;
			// print_r($result);
			// exit();
			// echo "form_validation success";
		}
		else{
			// echo validation_errors();
			$this->session->set_flashdata("message","validation Error.");
			 redirect('jbseeker_dashboard_controller/change_password_seeker');
		}

	}

	
}
