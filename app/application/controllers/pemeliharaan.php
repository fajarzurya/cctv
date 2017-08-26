<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script allowed');
	 
	
	class pemeliharaan extends CI_Controller
	{
	   public function __construct()
	   {
	      parent::__construct();
		  $this->load->helper(array('form', 'url', 'file'));
	   }
	   
	   //-------------------
	   public function detail_mtnc()
	   {
		 	$this->load->model('usermodel');
			$this->load->model('transmodel');
			
			  $this->load->library('form_validation');
			  $this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
			  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
	  
			  if($this->form_validation->run() == FALSE){
				  $th = $this->uri->segment(3);
				  }
			  else{
				  $th = $this->input->post('tahun');
				  }				

			$data['dokumen'] = $this->transmodel->pemeliharaan();
			//$data['th'] = $th;
			
			if($this->auth->is_logged_in() == false){	
				$data['notif'] = '0';			
		        $this->template->set('title', 'Login');
		    	$this->template->load('index', 'index');
			}
			else{
				$data['notif'] = '0';			
		        $this->template->set('title', 'Detail Pemeliharaan');
		    	$this->template->load('template', 'pemeliharaan/detail_mtnc',$data);
				}

		 }
		 
		 public function tambah_daftar()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('transmodel');
		  
		  $deskripsi = strip_tags($this->input->post('deskripsi'));
		  $satuan = strip_tags($this->input->post('satuan'));
		  $grup = strip_tags($this->input->post('grup'));
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
		  $data['kode_mtnc'] = $this->transmodel->kode_mtnc();
			
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
  
		  if($this->form_validation->run() == TRUE){				

				$data = array(
					 'DESKRIPSI' => $deskripsi,
					 'SATUAN' => $satuan,
					 'GRUP' => $grup
				   );	
				   
				   
				 $this->transmodel->tambah_mtnc($data);
				 redirect('pemeliharaan/detail_mtnc/');
				
		    }
			else{
				$this->template->set('title', 'Tambah Pemeliharaan');
				$this->template->load('template','pemeliharaan/tambah_mtnc', $data);
				}
				
			//=====================================================================
			
	   }
	   
	   public function edit_mtnc()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('transmodel');
		  
		  $id = $this->uri->segment(3);
		  $data['dokumen'] = $this->transmodel->pemeliharaan_id($id);
		  
		  $id = strip_tags($this->input->post('id'));
		  $deskripsi = strip_tags($this->input->post('deskripsi'));
		  $satuan = strip_tags($this->input->post('satuan'));
		  $grup = strip_tags($this->input->post('grup'));
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
			
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
  
		  if($this->form_validation->run() == TRUE){				

				$data = array(
					 'DESKRIPSI' => $deskripsi,
					 'SATUAN' => $satuan,
					 'GRUP' => $grup
				   );	
				   
				   
				 $this->transmodel->edit_mtnc($id,$data);
				 redirect('pemeliharaan/detail_mtnc/');
				
		    }
			else{
				$this->template->set('title', 'Edit Pemeliharaan');
				$this->template->load('template','pemeliharaan/edit_mtnc', $data);
				}
				
			//=====================================================================
			
	   }
	   public function delete_mtnc()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('transmodel');
		  
		  $id = $this->uri->segment(3);
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
		  
		  $this->transmodel->delete_mtnc($id);
		  redirect('pemeliharaan/detail_mtnc/');
		  	
			//=====================================================================
			
	   }

	}
