<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_akun extends CI_Model {

	public function proseslogin($user,$pass){


		$this->db->where('username',$user);
		$this->db->where('password',$pass);

		return $this->db->get('akun')->row();
	}

	public function getUser($id){
		$query=$this->db->select("*")
					->from('akun')
					->where('id_user',$id)
					->get();
					return $query->row();
	}


}






  

   

    


