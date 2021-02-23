<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrepreneur_post_model extends CI_Model {

	// function getAll(){
	// 	$this->db->order_by('id DESC');
	// 	return $this->db->get('contact')->result();
	// }
	function save(){
		$arr['entrepreneur_name'] = $this->input->post('entrepreneur_name');
		$arr['email'] = $this->input->post('email');
		$arr['phone'] = $this->input->post('phone');
		$arr['product_name'] = $this->input->post('product_name');
		$arr['product_details'] = $this->input->post('product_details');
		$arr['price'] = $this->input->post('price');

		$this->load->library('upload');
	    $config['upload_path'] = APPPATH.'../assets/img_entrepre';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['file_name'] = date(YmdHms).'_'.rand(1,999999);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $uploaded = $this->upload->data();
	    $arr['image'] = $uploaded['file_name'];


		$this->db->insert('entrepreneur_post',$arr);
	}
	
	// function delete($id)
	// {
	// 	$this->db->where(array('id'=>$id));
	// 	$this->db->delete('contact');
	// }
	
}
