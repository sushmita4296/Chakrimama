<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgetpass extends CI_Controller {
	function __construct(){
		parent::__construct();
		// if(!$this->session->userdata('id1')){
		// 	redirect('job_provider/provider');
		// }
		$this->load->model('provider_dashboard_model/forgetpassword/forgetpass_model');
		$this->load->library('form_validation');
  		 $this->load->library('encryption');
	}
	
	
	public function index()
	{
		// $this->load->view('provider_dashboard_view/header');
		$this->load->view('header');
		$this->load->view('provider_dashboard_view/forgetpassword/forgetpass');
		// $this->load->view('provider_dashboard_view/sidebar');
		// $this->load->view('footer');
	}
	public function reset(){
		 $email = $this->input->post('email');
		$result = $this->db->get_where('job_provider',array('email'=>$email))->row();
		// $this->load->library('email');
		if($result){
			// echo "Exist";
			$token = rand(1000,9999);
			$subject = "Password Recovery Mail";
			// $message = "Please click on password reset link <br><a href='".base_url()."provider_dashboard_controller/forgetpassword/forgetpass/verify/".$token."'>Reset Password</a>
			// <p>token:".$token."</p>";

			$message = "Please click on password reset link <br><a href='".base_url()."provider_dashboard_controller/forgetpassword/forgetpass/verify/".$token."/".$email."'>Reset Password</a>
			<p>token:".$token."</p>";


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
			    if($this->email->send())
			    {
			     // $this->session->set_flashdata('message', 'Check in your email for email verification mail');
			     // $this->session->flashdata('message');
			     // redirect('provider_dashboard_controller/register');
			    	// echo "mail send";
			     $this->session->set_flashdata("message","Check mail To recover Your Password");
				 redirect('provider_dashboard_controller/forgetpassword/forgetpass');

			    }
			    else{
			      echo "mail not send";
			    }
			// $this->email($email,'Reset password Link',$message);

		}
		else{
			// echo "not registered email";
			 $this->session->set_flashdata("message","Not registered email");
		     redirect('provider_dashboard_controller/forgetpassword/forgetpass');
		}

	}
	public function verify(){
		// echo
		 $data['token'] = $this->uri->segment(5);
		 $data['email'] = $this->uri->segment(6);

		 // echo $token;
		 $this->load->view('header');
		 $this->load->view('provider_dashboard_view/forgetpassword/recoverpass_form',$data);
	}
	public function update($token,$email){

		$userToken = $this->input->post('token');
		$userpass = $this->input->post('Password');
		$userconpass = $this->input->post('cPassword');


		if($userToken === $token){
			if($userpass === $userconpass){
				
				$this->forgetpass_model->changepass($email);
				$this->session->set_flashdata("message","Login With New Password");
			    redirect('jobprovider/provider');
				
			}
			else{
				echo "Userpass & confirm pass mismatch";
			}
		}
		else{
			echo "Wrong Token";
		}
	}
	
	
}
