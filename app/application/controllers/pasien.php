<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script allowed');
	 
	
	class Pasien extends CI_Controller
	{
	   public function __construct()
	   {
	      parent::__construct();
		  $this->load->helper(array('form', 'url', 'file'));
	   }
	   
	   //-------------------
	   public function detail_pasien()
	   {
		 	$this->load->model('usermodel');
			$this->load->model('mastermodel');
			
			  $this->load->library('form_validation');
			  $this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
			  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
	  
			  if($this->form_validation->run() == FALSE){
				  $th = $this->uri->segment(3);
				  }
			  else{
				  $th = $this->input->post('tahun');
				  }				

			$data['dokumen'] = $this->mastermodel->pasien($th);
			$data['th'] = $th;
			
			if($this->auth->is_logged_in() == false){	
				$data['notif'] = '0';			
		        $this->template->set('title', 'Login K3');
		    	$this->template->load('index', 'index');
			}
			else{
				$data['notif'] = '0';			
		        $this->template->set('title', 'Detail Pasien Tahun '.$th);
		    	$this->template->load('template', 'pasien/detail_pasien',$data);
				}

		 }
		 
		 public function tambah_daftar()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  
		  $nama = strip_tags($this->input->post('nama'));
		  $ktp = strip_tags($this->input->post('ktp'));
		  $kelamin = strip_tags($this->input->post('jenis_kelamin'));
		  $alamat = strip_tags($this->input->post('alamat'));
		  $tanggal = strip_tags($this->input->post('date'));
		  $keluhan = strip_tags($this->input->post('keluhan'));
		  $usia = strip_tags($this->input->post('usia'));
		  $obat = strip_tags($this->input->post('obat'));
		  $tahun = explode('-',$tanggal);
		  $jam = strip_tags($this->input->post('jam'));
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
			
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('nama', 'nama', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
  
		  if($this->form_validation->run() == TRUE){				

				$data = array(
					 'NAMA' => $nama,
					 'KTP' => $ktp,
					 'KELAMIN' => $kelamin,
					 'ALAMAT' => $alamat,
					 'TANGGAL' => $tanggal,
					 'KELUHAN' => $keluhan,
					 'USIA' => $usia,
					 'OBAT' => $obat,
					 'TAHUN' => $tahun[2],
					 'OBAT' => $obat,
					 'JAM' => $jam
				   );	
				   
				   
				 $this->mastermodel->tambah_pasien($data);
				 redirect('pasien/detail_pasien/'.$tahun[2]);
				
		    }
			else{
				$this->template->set('title', 'Tambah Pasien');
				$this->template->load('template','pasien/tambah_pasien', $data);
				}
				
			//=====================================================================
			
	   }
	   
	   public function edit_pasien()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  
		  $id = $this->uri->segment(3);
		  $data['dokumen'] = $this->mastermodel->pasien_id($id);
		  
		  $id = strip_tags($this->input->post('id'));
		  $nama = strip_tags($this->input->post('nama'));
		  $ktp = strip_tags($this->input->post('ktp'));
		  $kelamin = strip_tags($this->input->post('jenis_kelamin'));
		  $alamat = strip_tags($this->input->post('alamat'));
		  $tanggal = strip_tags($this->input->post('date'));
		  $keluhan = strip_tags($this->input->post('keluhan'));
		  $usia = strip_tags($this->input->post('usia'));
		  $obat = strip_tags($this->input->post('obat'));
		  $tahun = explode('-',$tanggal);
		  $jam = strip_tags($this->input->post('jam'));
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
			
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('nama', 'nama', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
  
		  if($this->form_validation->run() == TRUE){				

				$data = array(
					 'NAMA' => $nama,
					 'KTP' => $ktp,
					 'KELAMIN' => $kelamin,
					 'ALAMAT' => $alamat,
					 'TANGGAL' => $tanggal,
					 'KELUHAN' => $keluhan,
					 'USIA' => $usia,
					 'OBAT' => $obat,
					 'TAHUN' => $tahun[2],
					 'OBAT' => $obat,
					 'JAM' => $jam
				   );	
				   
				   
				 $this->mastermodel->edit_pasien($id,$data);
				 redirect('pasien/detail_pasien/'.$tahun[2]);
				
		    }
			else{
				$this->template->set('title', 'Edit Pasien');
				$this->template->load('template','pasien/edit_pasien', $data);
				}
				
			//=====================================================================
			
	   }

	}
