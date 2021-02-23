<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admininfo_model extends CI_Model {

	function getAll(){
		// $this->db->order_by('id DESC');
		return $this->db->get('admin')->row();
	}
	// function getById($id)
	// {
	// 	return $this->db->get_where('entrepreneur',array('id'=>$id))->row();
	// }
	function update($id){
		$arr['username'] = $this->input->post('username');
		$arr['address'] = $this->input->post('address');
		$arr['email'] = $this->input->post('email');
		$arr['phone'] = $this->input->post('phone');
		$this->db->where(array('id'=>$id));
		$this->db->update('admin',$arr);
	}
	function changepass($id){
		$arr['password'] = $this->input->post('NewPass');
		$this->db->where(array('id'=>$id));
		return $this->db->update('admin',$arr);
	}
	// function getCurrPass($id){
	// 	$this->db->where(['id'=>$id]);
	// 	return $this->db->get('admin')->row();
	// }
	// function delete($id)
	// {
	// 	$this->db->where(array('id'=>$id));
	// 	$this->db->delete('entrepreneur');
	// }
	
}
