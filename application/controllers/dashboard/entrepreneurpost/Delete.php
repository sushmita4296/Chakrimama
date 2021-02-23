delete.<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect('dashboard/Login');
		}
		$this->load->model('admin_post_model/deleteentrepreneurpost');
	}
	
	
	function delete($id)
	{
		$this->deleteentrepreneurpost->delete($id);
		$this->session->set_flashdata('success','delete successfully');
		redirect('dashboard/entrepreneurpost/postview_controller');
	} 
	
}
