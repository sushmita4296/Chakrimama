<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deleteentrepreneurpost extends CI_Model {

	function delete($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('entrepreneur_post');
	}
	
}
