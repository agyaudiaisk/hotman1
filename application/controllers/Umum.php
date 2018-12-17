<?php
defined('BASEPATH') OR exit('No direct script access allowed');





class Umum extends CI_Controller {

	function __construct(){
	parent:: __construct();
	$this->load->model('m_bencana1');
}

	public function index()
	{	$this->load->model('m_bencana1');

		$data['limit9'] = $this->m_bencana1->GetAllBencana9();
		
		$this->template->load('Umum/static','Umum/utama',$data);
		
	}

	public function about()
	{
		$this->template->load('Umum/static','Umum/about');
		
	}


	public function listangintopan()
	{	$this->load->model('m_bencana1');

		$data['bencanaangin'] = $this->m_bencana1->getBencanaAngin();
		$this->template->load('Umum/static','Umum/listangintopan', $data);
		
	}

	public function listbanjir()
	{	$this->load->model('m_bencana1');

		$data['bencanabanjir'] = $this->m_bencana1->getBencanaBanjir();
		$this->template->load('Umum/static','Umum/listbanjir', $data);
		
	}

	public function listgempabumi()
	{	$this->load->model('m_bencana1');

		$data['bencanagempa'] = $this->m_bencana1->getBencanaGempa();
		$this->template->load('Umum/static','Umum/listgempabumi', $data);
		
	}

	public function listgunungmeletus()
	{	$this->load->model('m_bencana1');

		$data['bencanagunung'] = $this->m_bencana1->GetBencanaGunung();
		$this->template->load('Umum/static','Umum/listgunungmeletus', $data);
		
	}

	public function listkebakaran()
	{	$this->load->model('m_bencana1');

		$data['bencanakebakaran'] = $this->m_bencana1->GetBencanaKebakaran();
		$this->template->load('Umum/static','Umum/listkebakaran', $data);
		
	}

		public function listkekeringan()
	{	$this->load->model('m_bencana1');

		$data['bencanakekeringan'] = $this->m_bencana1->GetBencanaKekeringan();
		$this->template->load('Umum/static','Umum/listkekeringan', $data);
		
	}


	public function listtanahlongsor()
	{	$this->load->model('m_bencana1');

		$data['bencanatanah'] = $this->m_bencana1->GetBencanaTanah();
		$this->template->load('Umum/static','Umum/listtanahlongsor', $data);
		
	}

	public function listtsunami()
	{	$this->load->model('m_bencana1');

		$data['bencanatsunami'] = $this->m_bencana1->GetBencanaTsunami();
		$this->template->load('Umum/static','Umum/listtsunami', $data);
		
	}

	public function rincian()
	{	$this->load->model('m_bencana1');
	$this->load->model('m_donasi');
		$id_bencana = $this->uri->segment(3);
		$idbencana2 = $this->uri->segment(3);
		$data_lihat = array(
			'data_bencana'=>$this->m_bencana1->lihat($id_bencana),
			'data_donasi'=>$this->m_donasi->lihat($idbencana2)
		);
		$this->template->load('Umum/static','Umum/rincian',$data_lihat);
		
	}

	
	public function semuabencana()
	{	$this->load->model('m_bencana1');

		$data['nama'] = $this->m_bencana1->GetAllBencana();
		$this->template->load('Umum/static','Umum/semuabencana', $data);
		
	}
}

