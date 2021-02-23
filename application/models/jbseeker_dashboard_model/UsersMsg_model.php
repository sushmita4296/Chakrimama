<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersMsg_model extends CI_Model {

	function getAll(){
		$this->db->order_by('id DESC');
		return $this->db->get('contact')->result();
	}
	function save(){
		$arr['name'] = $this->input->post('name');
		$arr['email'] = $this->input->post('email');
		$arr['message'] = $this->input->post('message');
		$this->db->insert('contact',$arr);
	}
	
	// function delete($id)
	// {
	// 	$this->db->where(array('id'=>$id));
	// 	$this->db->delete('contact');
	// }
	
}
