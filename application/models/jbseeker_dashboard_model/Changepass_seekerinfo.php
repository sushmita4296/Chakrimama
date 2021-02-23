<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepass_seekerinfo extends CI_Model {

	function getAll(){
		$id=$this->session->userdata('id');
		return $this->db->get_where('job_seeker',array('id'=>$id))->row();
	}
	
	function changepass($id){
		// $arr['password'] = $this->input->post('NewPass');
		$arr['password'] = $this->encryption->encrypt($this->input->post('NewPass'));

		

		$this->db->where(array('id'=>$id));
		return $this->db->update('job_seeker',$arr);
	}
	
	
}
