<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgetpass_model extends CI_Model {

	// function getAll(){
	// 	$id=$this->session->userdata('id1');
	// 	return $this->db->get_where('job_provider',array('id'=>$id))->row();
	// }
	
	function changepass($email){
		

		
		$arr['password'] = $this->encryption->encrypt($this->input->post('Password'));
		//$arr['password'] =$this->input->post('Password');

		

		$this->db->where(array('email'=>$email));
		return $this->db->update('job_seeker',$arr);
	}
	
	
}
