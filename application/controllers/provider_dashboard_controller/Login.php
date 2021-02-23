<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id1'))
  {
   //redirect('private_area');
   redirect('provider_dashboard_controller/provider_dashboard');
  }
  $this->load->library('form_validation');
  $this->load->library('encryption');
  // $this->load->model('login_model');
  $this->load->model('provider_dashboard_model/login_model');
 }

 function index()
 {
  // $this->load->view('login');
  $this->load->view('jobprovider/provider');
 }

 function validation()
 {
  $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'required');
  if($this->form_validation->run())
  {
  	$email=$this->input->post('email');
  	$pass= $this->input->post('password');

   //$result = $this->login_model->can_login($this->input->post('email'), $this->input->post('password'));
   $result = $this->login_model->can_login($email,$pass);
   if($result == '')
   {
    // redirect('private_area');
    redirect('provider_dashboard_controller/provider_dashboard');
   }
   else
   {
   	 // print_r($result);
   	 // exit;
    //$this->session->set_flashdata('message',$result);
    // redirect('login');
    //redirect('jbseeker_dashboard_controller/login');
          $this->session->set_flashdata("message","Wrong Password|email");
          redirect('jobprovider/provider');
    // echo "cant login";
   }
  }
  else
  {
   // $this->index();
  	echo "validation fail";
  }
 }

}

?>
