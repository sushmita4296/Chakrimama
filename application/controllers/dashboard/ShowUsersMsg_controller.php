<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowUsersMsg_controller extends CI_Controller {
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect('dashboard/Login');
		}
		$this->load->model('UsersMsg_model');
	}
	
	
	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/ChakriMama/dashboard/ShowUsersMsg_controller/index/';
		$config['total_rows'] = $this->db->get('contact')->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 5;

		// extra
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';

		// extra end
		$this->pagination->initialize($config);
		$this->db->order_by('id DESC');
	    $data['msgdata'] = $this->db->get('contact',$config['per_page'], $this->uri->segment(4));

		// $data['msgdata'] = $this->UsersMsg_model->getAll();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/UsersMsg_view',$data);
		$this->load->view('dashboard/sidebar');
	}
	// public function index()
	// {
		
	// 	$data['msgdata'] = $this->UsersMsg_model->getAll();
	// 	$this->load->view('dashboard/header');
	// 	$this->load->view('dashboard/UsersMsg_view',$data);
	// 	$this->load->view('dashboard/sidebar');
	// }
	function delete($id)
	{
		$this->UsersMsg_model->delete($id);
		$this->session->set_flashdata('success','delete successfully');
		redirect('dashboard/ShowUsersMsg_controller');
	} 
	
}
