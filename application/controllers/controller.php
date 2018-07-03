<?php
class Controller extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model');

	}

	function index(){
		$this->load->view('admin/dashboard');
	}

	function create(){

	}

	function store(){

	}

	function edit($id){

	}

	function show($id){

	}

	function update($id){

	}

	function delete($id){

	}

}
