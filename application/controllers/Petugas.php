<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function __construct(){
	parent:: __construct();
	$this->load->model('m_bencana1');
}


class Petugas extends CI_Controller {

	public function index(){
		$this->template->load('Petugas/staticpetugas','Petugas/utamapetugas');
		
	}

		public function aboutpetugas()
	{
		$this->template->load('Petugas/staticpetugas','Umum/about');
		
	}


	public function validasibencana()
	{
		$this->template->load('Petugas/staticpetugas','Petugas/validasi');
		
	}

	public function validasilanjut()
	{
		$this->template->load('Petugas/staticpetugas','Petugas/validasilanjut');
		
	}


	public function profil()
	{
		$this->template->load('Petugas/staticpetugas','Petugas/profil');
		
	}


	public function semuabencanapetugas()
	{	$this->load->model('m_bencana1');
		$data['nama'] = $this->m_bencana1->GetAllBencana();
		$this->template->load('Petugas/staticpetugas','Petugas/semuabencanapetugas', $data);
		
	}

		public function listtsunamipetugas()
	{	$this->load->model('m_bencana1');
		$data['bencanatsunami'] = $this->m_bencana1->GetBencanaTsunami();
		$this->template->load('Petugas/staticpetugas','Petugas/listtsunami', $data);
		
	}

	public function listtanahlongsorpetugas()
	{	$this->load->model('m_bencana1');
		$data['bencanatanah'] = $this->m_bencana1->GetBencanaTanah();
		$this->template->load('Petugas/staticpetugas','Petugas/listtanahlongsor', $data);
		
	}

	public function listkekeringanpetugas()
	{	$this->load->model('m_bencana1');
		$data['bencanakekeringan'] = $this->m_bencana1->GetBencanaKekeringan();
		$this->template->load('Petugas/staticpetugas','Petugas/listkekeringan', $data);
		
	}

	public function listkebakaranpetugas()
	{	$this->load->model('m_bencana1');
		$data['bencanakebakaran'] = $this->m_bencana1->GetBencanaKebakaran();
		$this->template->load('Petugas/staticpetugas','Petugas/listkebakaran', $data);
		
	}


	public function listgunungmeletuspetugas()
	{	$this->load->model('m_bencana1');
		$data['bencanagunung'] = $this->m_bencana1->GetBencanaGunung();
		$this->template->load('Petugas/staticpetugas','Petugas/listgunungmeletus', $data);
		
	}



	public function listgempabumipetugas()
	{	$this->load->model('m_bencana1');
		$data['bencanagempa'] = $this->m_bencana1->getBencanaGempa();
		$this->template->load('Petugas/staticpetugas','Petugas/listgempabumi', $data);
		
	}

		public function listbanjirpetugas()
	{	$this->load->model('m_bencana1');
		$data['bencanabanjir'] = $this->m_bencana1->getBencanaBanjir();
		$this->template->load('Petugas/staticpetugas','Petugas/listbanjir', $data);
		
	}


	public function listangintopanpetugas()
	{	$this->load->model('m_bencana1');
		$data['bencanaangin'] = $this->m_bencana1->getBencanaAngin();
		$this->template->load('Petugas/staticpetugas','Petugas/listangintopan', $data);
		
	}

	public function rincianpetugas()
	{	$this->load->model('m_bencana1');
	    $this->load->model('m_donasi');
		$id_bencana = $this->uri->segment(3);
		$idbencana2 = $this->uri->segment(3);
		$data_lihat = array(
			'data_bencana'=>$this->m_bencana1->lihat($id_bencana),
			'data_donasi'=>$this->m_donasi->lihat($idbencana2),
		);
		$this->template->load('Petugas/staticpetugas','Umum/rincian',$data_lihat);
		
	}

	
	public function daftardonatur()
	{	$this->load->model('m_donasi');
		$data['donasi'] = $this->m_donasi->GetAllDonasi();
		$this->template->load('Petugas/staticpetugas','Petugas/daftardonatur',$data);
		
	}
}
