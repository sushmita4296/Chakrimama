<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id2'))
  {
   redirect('Entrepreneur_dashboard_controller/Entrepreneur_dashboard');
  }
  $this->load->library('form_validation');
  $this->load->library('encryption');
  $this->load->model('Entrepreneur_dashboard_model/register_model');
 }

 function index()
 {
  $this->load->view('header');
  $this->load->view('signup_entrepreneur');
  $this->load->view('footer');
 }

 function validation()
 {
  $this->form_validation->set_rules('firstName', 'firstName', 'required');
  $this->form_validation->set_rules('lastName', 'lastName', 'required');
  $this->form_validation->set_rules('userName', 'userName', 'required');
  $this->form_validation->set_rules('password', 'Password', 'required');
  $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email|is_unique[entrepreneur.email]');
   $this->form_validation->set_rules('phone', 'phone', 'required');
    $this->form_validation->set_rules('age', 'Age', 'required');
   $this->form_validation->set_rules('Currentaddress', 'Currentaddress', 'required');
   $this->form_validation->set_rules('Permanentaddress', 'Permanentaddress', 'required');
  
   // $this->form_validation->set_rules('skill', 'skill', 'required');
   // $this->form_validation->set_rules('image', 'image', 'required');
  
 
  if($this->form_validation->run())
  {

   $verification_key = md5(rand());
    //$key = 'APANtByIGI1BpVXZTJgcsAG8GZl8pdwwa84';
   $encrypted_password = $this->encryption->encrypt($this->input->post('password'));
    //var_dump($encrypted_password, 'encrypted password');
    //$dycript = $this->encryption->decrypt($encrypted_password);
    //($dycript,'dycript pss');
    //echo '</br>' ;
    //echo '9c51871bb0871d977ca6681dc841d97472e363abbdbe32a2b0eb53b68193ba4b119829fbc5d4833a9951746f36f27bf8a245';
    //exit();

  //main code
   // $data = array(
   //  'name'  => $this->input->post('user_name'),
   //  'email'  => $this->input->post('user_email'),
   //  'password' => $encrypted_password,
   //  'verification_key' => $verification_key
    

   // );

   // extra start
   $data['first_name'] = $this->input->post('firstName');
   $data['last_name'] = $this->input->post('lastName');
   $data['username'] = $this->input->post('userName');
   $data['password'] = $encrypted_password;
   $data['email'] = $this->input->post('email');   
   $data['phone'] = $this->input->post('phone');   
    $data['age'] = $this->input->post('age');  
   $data['current_address'] = $this->input->post('Currentaddress');   
   $data['permanent_address'] = $this->input->post('Permanentaddress');   
    

   $data['verification_key'] = $verification_key;
    $this->load->library('upload');
    $config['upload_path'] = APPPATH.'../assets/photoofEntre';
   // $config['overwrite'] = TRUE;
    $config['allowed_types'] = 'gif|jpg|png';
    $config['file_name'] = date(YmdHms).'_'.rand(1,999999);
    $this->upload->initialize($config);
    $this->upload->do_upload('image');
    $uploaded = $this->upload->data();
    $data['image'] = $uploaded['file_name'];
   
    
    
//////////////extra end
   $id = $this->register_model->insert($data);
   if($id > 0)
   {
    $subject = "Please verify email for login";
    $message = "
    <p>Hi ".$this->input->post('userName')."</p>
    <p>This is email verification mail from Codeigniter Login Register system. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."entrepreneur_dashboard_controller/register/verify_email/".$verification_key."'>link</a>.</p>
    <p>Once you click this link your email will be verified and you can login into system.</p>
    <p>Thanks,</p>
    ";
    $config = array(
     'protocol'  => 'smtp',
     'smtp_host' => 'smtp.gmail.com',
     'smtp_port' => 587, //if 80 dosenot work use 24 or 21
     'smtp_user'  => 'demo161115048@gmail.com',  //give your user mail from which mail will be sent
      'smtp_pass'  => '161115048',  // smtp_user password
      '_smtp_auth' => true,
      'smtp_crypto' => 'tls',
      'protocol' => 'smtp',
     'mailtype'  => 'html', 
     'charset'    => 'iso-8859-1',
                   'wordwrap'   => TRUE
    );
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('demo161115048@gmail.com');  //same email u use for smtp_user 
    $this->email->to($this->input->post('email'));
    $this->email->subject($subject);
    $this->email->message($message);
    // ($this->email);
    // exit;
    if($this->email->send())
    {
     $this->session->set_flashdata('message', 'Check in your email for email verification mail');
     // $this->session->flashdata('message');
     redirect('entrepreneur_dashboard_controller/register');

    }
    else{
      echo "mail not send";
    }
   }
   else{
    echo "no id return";
   }
  }
  else
  {
    // $this->index();
    echo "validation fail";
  }
 }

 function verify_email()
 {
  if($this->uri->segment(4))
  {
   $verification_key = $this->uri->segment(4);
   //print_r($verification_key);
   //exit();
   if($this->register_model->verify_email($verification_key))
   {
    $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'entrepreneur/businessman">here</a></h1>';
   }
   else
   {
    $data['message'] = '<h1 align="center">Invalid Link</h1>';
   }
   $this->load->view('entrepreneur_dashboard_view/email_verification', $data);
  }
 }

}

?>
