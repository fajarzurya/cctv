<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script allowed');
	 
	
	class customer extends CI_Controller
	{
	   public function __construct()
	   {
	      parent::__construct();
		  $this->load->helper(array('form', 'url', 'file'));
	   }
	   
	   //-------------------
	   public function detail_cust()
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

			$data['dokumen'] = $this->mastermodel->customer();
			//$data['th'] = $th;
			
			if($this->auth->is_logged_in() == false){	
				$data['notif'] = '0';			
		        $this->template->set('title', 'Login');
		    	$this->template->load('index', 'index');
			}
			else{
				$data['notif'] = '0';			
		        $this->template->set('title', 'Detail Customer');
		    	$this->template->load('template', 'customer/detail_cust',$data);
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
				   
				   
				 $this->mastermodel->tambah_cust($data);
				 redirect('customer/detail_cust/');
				
		    }
			else{
				$this->template->set('title', 'Tambah Customer');
				$this->template->load('template','customer/tambah_cust', $data);
				}
				
			//=====================================================================
			
	   }
	   
	   public function edit_cust()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  
		  $id = $this->uri->segment(3);
		  $data['dokumen'] = $this->mastermodel->cust_id($id);
		  
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
				   
				   
				 $this->mastermodel->edit_cust($id,$data);
				 redirect('customer/detail_cust/');
				
		    }
			else{
				$this->template->set('title', 'Edit Customer');
				$this->template->load('template','customer/edit_cust', $data);
				}
				
			//=====================================================================
			
	   }
	   public function delete_cust()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  
		  $id = $this->uri->segment(3);
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
		  
		  $this->mastermodel->delete_cust($id);
		  redirect('customer/detail_cust/');
		  	
			//=====================================================================
			
	   }

	}
