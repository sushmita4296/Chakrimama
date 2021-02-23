<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrepreneurinfo_model extends CI_Model {

	function getAll(){
		// $this->db->order_by('id DESC');
		// return $this->db->get('entrepreneur')->row();
		$id=$this->session->userdata('id2');
		return $this->db->get_where('entrepreneur',array('id'=>$id))->row();
	}
	// function getById($id)
	// {
	// 	return $this->db->get_where('entrepreneur',array('id'=>$id))->row();
	// }
	function update($id,$data){
		// $data['first_name'] = $this->input->post('firstName');
		// $data['last_name'] = $this->input->post('lastName');
		// $data['username'] = $this->input->post('userName');
		// $data['email'] = $this->input->post('email');
		// $data['phone'] = $this->input->post('phone');
		// $data['current_address'] = $this->input->post('Currentaddress');
		// $data['permanent_address'] = $this->input->post('Permanentaddress');
		// $data['age'] = $this->input->post('age');
		// $data['skill'] = $this->input->post('skill');

		///image
		// $this->load->library('upload');
		
	 //    $config['upload_path'] = APPPATH.'../upload/';
	 //    $config['allowed_types'] = 'gif|jpg|png';
	 //    $config['file_name'] = date(YmdHms).'_'.rand(1,999999);
	 //    $this->upload->initialize($config);
	 //    $this->upload->do_upload('image');
	 //    $uploaded = $this->upload->data();
	 //    $data['image'] = $uploaded['file_name'];
		//
		// $arr['image'] = $this->input->post('image');
		$this->db->where(array('id'=>$id));
		$this->db->update('entrepreneur',$data);
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
