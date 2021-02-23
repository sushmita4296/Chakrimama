<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_post_model extends CI_Model {

	// function getAll(){
	// 	$this->db->order_by('id DESC');
	// 	return $this->db->get('contact')->result();
	// }
	function save(){
		$arr['provider_name'] = $this->input->post('provider_name');
		$arr['email'] = $this->input->post('email');
		$arr['phone'] = $this->input->post('phone');
		$arr['job_position'] = $this->input->post('job_position');
		$arr['requirement'] = $this->input->post('requirement');
		$arr['deadline'] = $this->input->post('deadline');
		$arr['available'] = $this->input->post('available');
		$this->db->insert('job_post',$arr);
	}
	
	// function delete($id)
	// {
	// 	$this->db->where(array('id'=>$id));
	// 	$this->db->delete('contact');
	// }
	
}
