<?php
class C_auth extends CI_Controller{

	function __construct(){
		parent::__construct();
		  $this->load->model('m_auth');
	}

  function index(){
    $this->load->view('login');
  }
  function logout(){
    $this->session->sess_destroy();
    redirect(base_url('c_auth'));
  }
  function login(){
    $username = $this->input->post('nipg');
    $password = $this->input->post('password');

    $where = array(
      'nipg' => $username,
      'password' => md5($password)
    );

    $cek = $this->m_auth->cek_login("tb_karyawan", $where)->num_rows();
    if ($cek > 0) {
      $ambildata = $this->m_auth->cek_login('tb_karyawan',$where)->result_array();
      foreach ($ambildata as $data) {
        $data_session = array(
          'name' => $data['name'],
          'nipg'=> $data['nipg'],
          'gender'=> $data['gender'],
          'tgl_lahir'=> $data['tgl_lahir'],
          'grade'=> $data['grade'],
          'division'=> $data['division'],
          'password'=> $data['password'],
          'status' => "logged"
        );
        $this->session->set_userdata($data_session);
      }
      redirect(base_url("c_user"));
      echo "test";
    }else{
      echo "username/password salah";
    }

  }
}
