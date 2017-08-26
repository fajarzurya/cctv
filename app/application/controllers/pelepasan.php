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
		  $this->load->model('mastermodel');
		  $this->load->model('transmodel');
		  
		  $id = $this->uri->segment(3);
		  $data['karyawan'] = $this->mastermodel->employee();
		  $data['dokumen'] = $this->transmodel->pelepasan_id($id);
		  
		  $id_instalasi = strip_tags($this->input->post('id_instalasi'));
		  $tgl_pelepasan = strip_tags($this->input->post('tgllepas'));
		  $keterangan = strip_tags($this->input->post('keterangan'));
		  $pelaksana = strip_tags($this->input->post('pelaksana'));
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
			
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('pelaksana', 'pelaksana', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
  
		  if($this->form_validation->run() == TRUE){				

				$data_ins = array(
					 'id_instalasi' => $id_instalasi,
					 'status' => 'Pelepasan'
				   );
				   
				$data_lepas = array(
					 'id_instalasi' => $id_instalasi,
					 'tgl_pelepasan' => date('Y-m-d',strtotime($tgl_pelepasan)),
					 'keterangan' => $keterangan,
					 'pelaksana' => $pelaksana
				   );
				 
				 $this->transmodel->edit_ins($id_instalasi,$data_ins);
				 $this->transmodel->tambah_lepas($data_lepas);
				 redirect('pelepasan/detail_dis/');
				
		    }
			else{
				$this->template->set('title', 'Pelepasan Instalasi');
				$this->template->load('template','pelepasan/edit_dis', $data);
				}
				
			//=====================================================================
			
	   }

	}
