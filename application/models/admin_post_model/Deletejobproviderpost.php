<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deletejobproviderpost extends CI_Model {

	function delete($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('job_post');
	}
	
}
