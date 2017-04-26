<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script allowed');
	 
	
	class Printer extends CI_Controller
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
		    	$this->load->view('printer/detail_pasien',$data);
				}

		 }

	}
