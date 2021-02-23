<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobproviderinfo_model extends CI_Model {

	function getAll(){
		$this->db->order_by('id DESC');
		return $this->db->get('job_provider')->result();
	}
	function getById($id)
	{
		return $this->db->get_where('job_provider',array('id'=>$id))->row();
	}
	function update($id){
		$arr['first_name'] = $this->input->post('first_name');
		$arr['last_name'] = $this->input->post('last_name');
		$arr['username'] = $this->input->post('username');
		// $arr['password'] = $this->input->post('description');
		$arr['email'] = $this->input->post('email');
		$arr['phone'] = $this->input->post('phone');
		$arr['current_address'] = $this->input->post('current_address');
		$arr['permanent_address'] = $this->input->post('permanent_address');
		$arr['age'] = $this->input->post('age');
		// $arr['skill'] = $this->input->post('skill');
		$this->db->where(array('id'=>$id));
		$this->db->update('job_provider',$arr);
	}
	function delete($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('job_provider');
	}
	
}
