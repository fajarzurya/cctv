<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script allowed');
	 
	
	class pelepasan extends CI_Controller
	{
	   public function __construct()
	   {
	      parent::__construct();
		  $this->load->helper(array('form', 'url', 'file'));
	   }
	   
	   //-------------------
	   public function detail_dis()
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

			$data['dokumen'] = $this->transmodel->pelepasan();
			//$data['th'] = $th;
			
			if($this->auth->is_logged_in() == false){	
				$data['notif'] = '0';			
		        $this->template->set('title', 'Login');
		    	$this->template->load('index', 'index');
			}
			else{
				$data['notif'] = '0';			
		        $this->template->set('title', 'Detail Instalasi');
		    	$this->template->load('template', 'pelepasan/detail_dis',$data);
				}

		 }
	   
	   public function edit_dis()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('transmodel');
		  
		  $id = $this->uri->segment(3);
		  $data['dokumen'] = $this->transmodel->pelepasan_id($id);
		  
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
				   
				   
				 $this->transmodel->edit_em($id,$data);
				 redirect('pelepasan/detail_dis/');
				
		    }
			else{
				$this->template->set('title', 'Pelepasan Instalasi');
				$this->template->load('template','pelepasan/edit_dis', $data);
				}
				
			//=====================================================================
			
	   }

	}
