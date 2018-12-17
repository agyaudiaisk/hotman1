<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_donasi extends CI_Model {



	public function lihat($idbencana2){
		$query = $this->db->query('SELECT * FROM donasi  ORDER BY  id_donasi DESC');
		/* $this->db->where('id_bencana2',$idbencana2)
						  ->get("donasi");*/

		if($query){
			return $query->row();
		} else{
			return false;
		}
	}

	public function terbaru(){
		$terbaru= $this->db->query('SELECT * FROM donasi ORDER BY id_bencana2 DESC');
		return $terbaru;
	}


	public function GetAllDonasi(){
		$donasi = $this->db->query('SELECT * FROM donasi ORDER BY id_donasi');
		return $donasi;
	}



}