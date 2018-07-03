<?php

class Model extends CI_Model{

	function getAdmin($table,$where){
		return $this->db->get_where($table,$where);
	}

	function getMember($table,$where){
		return $this->db->get_where($table,$where);

	}
}
