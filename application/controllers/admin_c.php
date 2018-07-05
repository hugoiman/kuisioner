<?php
class Admin_c extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('admin_m');

	}

	function index(){
		//$this->load->view('admin/dashboard');
		$this->load->view('admin/dashboard');
	}

	function create(){

	}

	function store(){

	}

	function edit($id){

	}
	function show($id){
		$where = array('id_quisioner' => $id);
		//$data['datas'] = $this->model->show('tb_soal_kuisioner',$where);
		$this->load->view('admin/question');
	}

	function showPage($page){
		if($page == 'statistik'){
			$this->load->view('admin/statistik');
		}
		else if($page == 'create'){
			$this->load->view('admin/create_kuisioner');
		}
	}

	function update($id){

	}

	function delete($id){

	}

}
?>
