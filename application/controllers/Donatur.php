<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Donatur extends CI_Controller {

	function __construct(){
	parent:: __construct();
	$this->load->model('m_bencana1');
}

	public function index()
	{	$this->load->model('m_bencana1');

		$data['limit9'] = $this->m_bencana1->GetAllBencana9();
		$this->template->load('Donatur/staticdonatur','Donatur/utama',$data);
		
	}

	public function profil(){
			$this->load->helper('xss_helper');
			$this->template->load('Donatur/staticdonatur','Donatur/profil');
		
	}


	public function aboutdonatur()
	{
		$this->template->load('Donatur/staticdonatur','Umum/about');
		
	}

	public function donasi()

	{	$id_bencana = $this->uri->segment(3);
		$data_lihat = array(
			'data_bencana'=>$this->m_bencana1->lihat($id_bencana)
		);
		
		$this->template->load('Donatur/staticdonatur','Donatur/tambahdonasi',$data_lihat);
		
	}

	public function berhasil()
	{$id_bencana = $this->uri->segment(3);
		$data_lihat = array(
			'data_bencana'=>$this->m_bencana1->lihat($id_bencana)
		);
		$this->template->load('Donatur/staticdonatur','Donatur/berhasil',$data_lihat);
		
	}


	public function listangintopandonatur()
	{$this->load->model('m_bencana1');
		$data['bencanaangin'] = $this->m_bencana1->getBencanaAngin();
		$this->template->load('Donatur/staticdonatur','Donatur/listangintopan', $data);
		
	}

	public function listbanjirdonatur()
	{$this->load->model('m_bencana1');
		$data['bencanabanjir'] = $this->m_bencana1->getBencanaBanjir();
		$this->template->load('Donatur/staticdonatur','Donatur/listbanjir', $data);
		
	}

	public function listgempabumidonatur()
	{$this->load->model('m_bencana1');
		$data['bencanagempa'] = $this->m_bencana1->getBencanaGempa();
		$this->template->load('Donatur/staticdonatur','Donatur/listgempabumi', $data);
		
	}

	public function listgunungmeletusdonatur()
	{$this->load->model('m_bencana1');
		$data['bencanagunung'] = $this->m_bencana1->GetBencanaGunung();
		$this->template->load('Donatur/staticdonatur','Donatur/listgunungmeletus', $data);
		
	}

	public function listkebakarandonatur()
	{$this->load->model('m_bencana1');
		$data['bencanakebakaran'] = $this->m_bencana1->GetBencanaKebakaran();
		$this->template->load('Donatur/staticdonatur','Donatur/listkebakaran', $data);
		
	}

		public function listkekeringandonatur()
	{$this->load->model('m_bencana1');
		$data['bencanakekeringan'] = $this->m_bencana1->GetBencanaKekeringan();
		$this->template->load('Donatur/staticdonatur','Donatur/listkekeringan', $data);
		
	}


	public function listtanahlongsordonatur()
	{$this->load->model('m_bencana1');
		$data['bencanatanah'] = $this->m_bencana1->GetBencanaTanah();
		$this->template->load('Donatur/staticdonatur','Donatur/listtanahlongsor', $data);
		
	}

	public function listtsunamidonatur()
	{$this->load->model('m_bencana1');
		$data['bencanatsunami'] = $this->m_bencana1->GetBencanaTsunami();
		$this->template->load('Donatur/staticdonatur','Donatur/listtsunami', $data);
		
	}

	public function rinciandonatur()
	{	$this->load->model('m_bencana1');
	    $this->load->model('m_donasi');
		$id_bencana = $this->uri->segment(3);
		$idbencana2 = $this->uri->segment(3);
		$data_lihat = array(
			'data_bencana'=>$this->m_bencana1->lihat($id_bencana),
			'data_donasi'=>$this->m_donasi->lihat($idbencana2),
		);
		$this->template->load('Donatur/staticdonatur','Umum/rincian',$data_lihat);
		
	}


	public function semuabencanadonatur()
	{$this->load->model('m_bencana1');

		$data['nama'] = $this->m_bencana1->GetAllBencana();
		$this->template->load('Donatur/staticdonatur','Donatur/semuabencanadonatur', $data);
		
	}
}

