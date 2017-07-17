<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script allowed');
	 
	
	class employee extends CI_Controller
	{
	   public function __construct()
	   {
	      parent::__construct();
		  $this->load->helper(array('form', 'url', 'file'));
	   }
	   
	   //-------------------
	   public function detail_em()
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

			$data['dokumen'] = $this->mastermodel->employee();
			//$data['th'] = $th;
			
			if($this->auth->is_logged_in() == false){	
				$data['notif'] = '0';			
		        $this->template->set('title', 'Login');
		    	$this->template->load('index', 'index');
			}
			else{
				$data['notif'] = '0';			
		        $this->template->set('title', 'Detail Employee');
		    	$this->template->load('template', 'employee/detail_em',$data);
				}

		 }
		 
		 public function tambah_daftar()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  
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
				   
				   
				 $this->mastermodel->tambah_em($data);
				 redirect('employee/detail_em/');
				
		    }
			else{
				$this->template->set('title', 'Tambah Employee');
				$this->template->load('template','employee/tambah_em', $data);
				}
				
			//=====================================================================
			
	   }
	   
	   public function edit_em()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  
		  $id = $this->uri->segment(3);
		  $data['dokumen'] = $this->mastermodel->em_id($id);
		  
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
				   
				   
				 $this->mastermodel->edit_em($id,$data);
				 redirect('employee/detail_em/');
				
		    }
			else{
				$this->template->set('title', 'Edit Employee');
				$this->template->load('template','employee/edit_em', $data);
				}
				
			//=====================================================================
			
	   }
	   public function delete_em()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  
		  $id = $this->uri->segment(3);
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
		  
		  $this->mastermodel->delete_em($id);
		  redirect('employee/detail_em/');
		  	
			//=====================================================================
			
	   }

	}
