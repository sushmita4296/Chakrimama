<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

	
	public function validate()
	{
		$arr['username'] = $this->input->post('username');
		$arr['password'] = $this->input->post('password');
		return $this->db->get_where('admin',$arr)->row();
	}
	
}
