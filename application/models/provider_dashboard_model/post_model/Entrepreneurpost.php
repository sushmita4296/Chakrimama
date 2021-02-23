<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrepreneurpost extends CI_Model {

	function getAll(){
		$this->db->order_by('id DESC');
		return $this->db->get('entrepreneur_post')->result();
	}
	
}
