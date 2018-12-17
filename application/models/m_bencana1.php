<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_bencana1 extends CI_Model {



	public function GetAllBencana(){
		$nama = $this->db->query('SELECT * FROM daftar_bencana ');
		return $nama;
	}



	public function GetAllBencana9(){
		$limit9 = $this->db->query('SELECT * FROM daftar_bencana ORDER BY id_bencana DESC LIMIT 9 ');
		return $limit9;
	}







	public function GetBencanaGunung()
	{
		$bencanagunung = $this->db->query('SELECT * FROM daftar_bencana WHERE jenis = "Gunung Meletus" ;' );
		return $bencanagunung;

		
		
	}

	public function edit($id_bencana){
		$query = $this->db->where('id_bencana',$id_bencana)
						  ->get("daftar_bencana");

		if($query){
			return $query->row();
		} else{
			return false;
		}
	}

	public function lihat($id_bencana){
		$query = $this->db->where('id_bencana',$id_bencana)
						  ->get("daftar_bencana");

		if($query){
			return $query->row();
		} else{
			return false;
		}
	}

	public function hapus($id_bencana){
        $query = $this->db->where('id_bencana',$id_bencana)
        				->delete("daftar_bencana");
        
        if($query){
            return true;
        }else{
            return false;
        }
    }





	public function update($data,$id_bencana){
		$query = $this->db->where('id_bencana',$id_bencana)
						  ->update("daftar_bencana",$data);

		if($query){
			return true;
		} else {
			return false;
		}

	}

	public function GetBencanaBanjir()
	{

		$bencanabanjir = $this->db->query('SELECT * FROM daftar_bencana WHERE jenis ="Banjir";' );
		return $bencanabanjir;
	}

	public function GetBencanaTanah()
	{

		$bencanatanah = $this->db->query('SELECT * FROM daftar_bencana WHERE jenis ="Tanah Longsor";' );
		return $bencanatanah;
	}

	public function GetBencanaAngin()
	{

		$bencanaangin = $this->db->query('SELECT * FROM daftar_bencana WHERE jenis ="Badai Angin";' );
		return $bencanaangin;
	}

	public function GetBencanaKebakaran()
	{

		$bencanakebakaran = $this->db->query('SELECT * FROM daftar_bencana WHERE jenis ="Kebakaran";' );
		return $bencanakebakaran;
	}

	public function GetBencanaGempa()
	{

		$bencanagempa = $this->db->query('SELECT * FROM daftar_bencana WHERE jenis ="Gempa Bumi";' );
		return $bencanagempa;
	}

	public function GetBencanaTsunami()
	{

		$bencanatsunami = $this->db->query('SELECT * FROM daftar_bencana WHERE jenis ="Tsunami";' );
		return $bencanatsunami;
	}

	public function GetBencanaKekeringan()
	{

		$bencanakekeringan = $this->db->query('SELECT * FROM daftar_bencana WHERE jenis ="Kekeringan";' );
		return $bencanakekeringan;
	}

}

