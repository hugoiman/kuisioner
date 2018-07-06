<?php
class C_user extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_user');

	}
	function simpan(){
		$pilihan=$_POST["pilihan"];
		// for ($i=1; $i < $counter ; $i++) {
			echo $pilihan[1];
			echo $pilihan[2];
		// }
		 // $pilihan = $this->input->post($i);
	}

	function index(){
		$data['judul'] = $this->m_user->getJudul()->result_array();
    $this->load->view('user/dashboard',$data);
	}

	function show($id){
		$where = array('id_quisioner' => $id);
		$data['judul'] = $this->m_user->show('tb_kuisioner',$where)->result_array();
		$data['datas'] = $this->m_user->show('tb_soal_kuisioner',$where)->result_array();
		$this->load->view('user/question', $data);
	}

	function showPage($page){
		if($page == 'statistik'){
			$this->load->view('user/statistik');
		}
		else if($page == 'create'){
			$this->load->view('user/create_kuisioner');
		}
	}




}
?>
