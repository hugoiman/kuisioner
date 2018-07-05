<?php

class Model extends CI_Model{

	function create(){

	}

	function store(){

	}

	function edit($id,$table){

	}

	function show($table,$where){
		return $this->db->get_where($table,$where);
	}

	function update($id,$table){

	}

	function delete($id,$table){

	}

}
