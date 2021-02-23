<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersMsg_model extends CI_Model {

	function getAll(){

		

		// $this->db->order_by('id DESC');
		// return $this->db->get('contact')->result();
	}
	// function getAll(){
	// 	$this->db->order_by('id DESC');
	// 	return $this->db->get('contact')->result();
	// }
	function save(){
		$arr['name'] = $this->input->post('name');
		$arr['email'] = $this->input->post('email');
		$arr['message'] = $this->input->post('message');
		$this->db->insert('contact',$arr);
	}
	// function getById($id)
	// {
	// 	return $this->db->get_where('job_seeker',array('id'=>$id))->row();
	// }

	// function update($id){
	// 	$arr['first_name'] = $this->input->post('first_name');
	// 	$arr['last_name'] = $this->input->post('last_name');
	// 	$arr['username'] = $this->input->post('username');
	// 	// $arr['password'] = $this->input->post('description');
	// 	$arr['email'] = $this->input->post('email');
	// 	$arr['phone'] = $this->input->post('phone');
	// 	$arr['current_address'] = $this->input->post('current_address');
	// 	$arr['permanent_address'] = $this->input->post('permanent_address');
	// 	$arr['age'] = $this->input->post('age');
	// 	$arr['skill'] = $this->input->post('skill');
	// 	$this->db->where(array('id'=>$id));
	// 	$this->db->update('job_seeker',$arr);
	// }
	function delete($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('contact');
	}
	
}
