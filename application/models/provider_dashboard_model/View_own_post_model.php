<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_own_post_model extends CI_Model {

	function getAll(){
		// $this->db->order_by('id DESC');
		// return $this->db->get('job_provider')->row();
		$id=$this->session->userdata('id1');
		return $this->db->get_where('job_provider',array('id'=>$id))->row();
	}
	function getAllJobPost($email){
		$this->db->order_by('id DESC');
		// return $this->db->get('job_provider')->row();
		//$id=$this->session->userdata('id1');
		return $this->db->get_where('job_post',array('email'=>$email))->result();
	}
	function delete($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('job_post');
	}
	function getPost($id)
	{
		return $this->db->get_where('job_post',array('id'=>$id))->row();
		//$this->db->delete('job_post');
	}
	function update($id,$arr)
	{
		$this->db->where(array('id'=>$id));
		$this->db->update('job_post',$arr);
	}
	
	
	
	
}
