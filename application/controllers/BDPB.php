<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class BDPB extends CI_Controller {

function __construct(){
	parent:: __construct();
	$this->load->model('m_bencana1');
}

	public function index()
	{
		
		$this->template->load('BDPB/staticbdpb','BDPB/utamabdpb');
		
	}

	public function tambahbencana()
	{
		$this->template->load('BDPB/staticbdpb','BDPB/tambahbencana');
		
	}

	public function profil()
	{
		$this->template->load('BDPB/staticbdpb','BDPB/profil');
		
	}

	 public function kelolabencana()
  	{	$this->load->model('m_bencana1');
		$data['nama'] = $this->m_bencana1->GetAllBencana();
    	$this->template->load('BDPB/staticbdpb','BDPB/kelolabencana',$data);
    
  	}
  	public function rincianbdpb()
	{	$this->load->model('m_bencana1');
	    $this->load->model('m_donasi');
		$id_bencana = $this->uri->segment(3);
		$idbencana2 = $this->uri->segment(3);
		$data_lihat = array(
			'data_bencana'=>$this->m_bencana1->lihat($id_bencana),
			'data_donasi'=>$this->m_donasi->lihat($idbencana2),
		);
		$this->template->load('BDPB/staticbdpb','Umum/rincian', $data_lihat);
		
	}

  	public function editbencana()
  	{
  		$this->load->model('m_bencana1');
  		$id_bencana = $this->uri->segment(3);

  		$data_edit = array(
  			'data_bencana' => $this->m_bencana1->edit($id_bencana)
  		);

  		$this->template->load('BDPB/staticbdpb','BDPB/editbencana',$data_edit);
  	}

  	 public function hapus()
    {	
    	$this->load->model('m_bencana1');
        $id_bencana = $this->uri->segment(3);

        $data['hapus']= $this->m_bencana1->hapus($id_bencana);
        $data['nama'] = $this->m_bencana1->GetAllBencana();
        
        $this->template->load('BDPB/staticbdpb','BDPB/kelolabencana',$data);
    }

  	public function update()
  	{
  		$id_bencana = $this->input->post("id_bencana");

  		$data = array(

  			'nama_bencana' => $this->input->post("nama_bencana"),
  			'lokasi_bencana' => $this->input->post("lokasi_bencana"),
  			'deskripsi_bencana' => $this->input->post("deskripsi_bencana"),
  			'nama_penerima' => $this->input->post("nama_penerima"),
  			'alamat_penerima' => $this->input->post("alamat_penerima"),
  			'telepon_penerima' => $this->input->post("telepon_penerima")



  		);

  		$save=$this->m_bencana1->update($data,$id_bencana);
  		if($save){
  			redirect('BDPB/kelolabencana');
  		}else{
  			
  		}

  		
  	}



  	


  	public function aboutbdpb()
	{
		$this->template->load('BDPB/staticbdpb','Umum/about');
		
	}

	public function semuabencanabdpb()
	{	$this->load->model('m_bencana1');
		$data['nama'] = $this->m_bencana1->GetAllBencana();
		$this->template->load('BDPB/staticbdpb','BDPB/semuabencanabdpb', $data);
		
	}

	public function listgunungmeletusbdpb()
	{	$this->load->model('m_bencana1');
		$data['bencanagunung'] = $this->m_bencana1->GetBencanaGunung();
		$this->template->load('BDPB/staticbdpb','BDPB/listgunungmeletus', $data);
		
	}

	public function listbanjirbdpb()
	{	$this->load->model('m_bencana1');
		$data['bencanabanjir'] = $this->m_bencana1->getBencanaBanjir();
		$this->template->load('BDPB/staticbdpb','BDPB/listbanjir', $data);
		
	}

		public function listgempabumibdpb()
	{	$this->load->model('m_bencana1');
		$data['bencanagempa'] = $this->m_bencana1->getBencanaGempa();
		$this->template->load('BDPB/staticbdpb','BDPB/listgempabumi', $data);
		
	}

	public function listangintopanbdpb()
	{	$this->load->model('m_bencana1');
		$data['bencanaangin'] = $this->m_bencana1->getBencanaAngin();
		$this->template->load('BDPB/staticbdpb','BDPB/listangintopan', $data);
		
	}


	public function listkebakaranbdpb()
	{	$this->load->model('m_bencana1');
		$data['bencanakebakaran'] = $this->m_bencana1->GetBencanaKebakaran();
		$this->template->load('BDPB/staticbdpb','BDPB/listkebakaran', $data);
		
	}

	public function listkekeringanbdpb()
	{	$this->load->model('m_bencana1');
		$data['bencanakekeringan'] = $this->m_bencana1->GetBencanaKekeringan();
		$this->template->load('BDPB/staticbdpb','BDPB/listkekeringan', $data);
		
	}

	public function listtanahlongsorbdpb()
	{	$this->load->model('m_bencana1');
		$data['bencanatanah'] = $this->m_bencana1->GetBencanaTanah();
		$this->template->load('BDPB/staticbdpb','BDPB/listtanahlongsor', $data);
		
	}

	public function listtsunamibdpb()
	{	$this->load->model('m_bencana1');

		$data['bencanatsunami'] = $this->m_bencana1->getBencanaTsunami();
		$this->template->load('BDPB/staticbdpb','BDPB/listtsunami', $data);
		
	}

	



}
