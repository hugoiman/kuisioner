<?php

class M_user extends CI_Model{

	function create(){

	}

	function store(){

	}

	function edit($id,$table){

	}

	function getJudul(){
		$judul = $this->db->query("SELECT * FROM tb_kuisioner");
		return $judul;
	}
	function show($table,$where){
		return $this->db->get_where($table,$where);
	}

	function update($id,$table){

	}

	function delete($id,$table){

	}

}
