<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Login extends CI_Controller {

public function ___construct(){
	parent::___construct();
	$this->load->library('session');
}

	public function ceklogin(){
			if(isset($_POST['login'])){
				

				$user = $this->input->post('user',true);
				$pass = $this->input->post('pass',true);
				$cek = $this->m_akun->proseslogin($user,$pass);	
				$hasil = count($cek);
				
				$data = array(
					'user' => $user

				);


				if($hasil > 0){
				

				$pelogin = $this->db->get_where('akun',array('username' => $user)) ->row();
				$data ['data_user'] =$pelogin;

				if($pelogin->level == 'donatur'){
					

					$this->session->set_userdata($data);
					
				
					redirect('Donatur/index');
				} else if ($pelogin->level == 'bdpb'){

					$this->session->set_userdata($data);

					redirect('BDPB/index');
				} else if ($pelogin->level == 'petugas'){
					
					$this->session->set_userdata($data);

					redirect('Petugas/index');


				}


			} else {
				redirect('Login/index');
			}

		}
	}


	public function index()
	{
		$this->load->view('Umum/login');
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login/index');
	}

	public function daftar(){
		$this->load->view('Donatur/daftar');
	}




}
