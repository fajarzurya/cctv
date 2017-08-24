<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script allowed');
	 
	
	class instalasi extends CI_Controller
	{
	   public function __construct()
	   {
	      parent::__construct();
		  $this->load->helper(array('form', 'url', 'file'));
	   }
	   
	   //-------------------
	   public function do_upload()
	   {
		   $config['upload_path']          = './upload/';
		   $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx';
           $config['max_size']             = 100;
           $config['max_width']            = 1024;
           $config['max_height']           = 768;
		   
		   $this->load->library('upload', $config);
		   
		   if ( ! $this->instalasi->do_upload('drawing'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        redirect('instalasi/detail_ins/');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $this->template->set('title', 'Edit Instalasi');
						$this->template->load('template','instalasi/edit_ins', $data);
                }
	   }
	   public function detail_ins()
	   {
		 	$this->load->model('usermodel');
			// $this->load->model('mastermodel');
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

			$data['dokumen'] = $this->transmodel->instalasi();
			//$data['th'] = $th;
			
			if($this->auth->is_logged_in() == false){	
				$data['notif'] = '0';			
		        $this->template->set('title', 'Login');
		    	$this->template->load('index', 'index');
			}
			else{
				$data['notif'] = '0';			
		        $this->template->set('title', 'Detail Instalasi');
		    	$this->template->load('template', 'instalasi/detail_ins',$data);
				}

		 }
		 
		 public function tambah_daftar()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  $this->load->model('transmodel');
		  
		  $data['pelanggan'] = $this->mastermodel->customer();
		  $data['karyawan'] = $this->mastermodel->employee();
		  
		  $data['kode_instalasi'] = $this->transmodel->kode_instalasi();
		  $id_instalasi = strip_tags($this->input->post('id_instalasi'));
		  $deskripsi = strip_tags(strtoupper($this->input->post('deskripsi')));
		  $status = strip_tags($this->input->post('status'));
		  $pelanggan = strip_tags($this->input->post('pelanggan'));
		  $jenis = strip_tags($this->input->post('jenis'));
		  $drawing = strip_tags($this->input->post('drawing'));
		  $pelaksana = strip_tags($this->input->post('pelaksana'));
		  $total = strip_tags($this->input->post('total'));
		  $tglmulai = strip_tags($this->input->post('tglmulai'));
		  $tglselesai = strip_tags($this->input->post('tglselesai'));
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
		
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
  
		  if($this->form_validation->run() == TRUE){				

				$data = array(
					 'id_instalasi' => $id_instalasi,
					 'deskripsi' => $deskripsi,
					 'status' => $status,
					 'id_customer' => $pelanggan,
					 'jenis' => $jenis,
					 'drawing' => $drawing,
					 'pelaksana' => $pelaksana,
					 'total' => $total,
					 'tgl_mulai' => date('Y-m-d',strtotime($tglmulai)),
					 'tgl_selesai' => date('Y-m-d',strtotime($tglselesai))
				   );	
				   
				   
				 $this->transmodel->tambah_ins($data);
				 redirect('instalasi/detail_ins/');
				
		    }
			else{
				$this->template->set('title', 'Tambah Instalasi');
				$this->template->load('template','instalasi/tambah_ins', $data);
				}
				
			//=====================================================================
			
	   }
	   
	   public function edit_ins()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  $this->load->model('transmodel');
		  
		  $id = $this->uri->segment(3);
		  $data['dokumen'] = $this->transmodel->instalasi_id($id);
		  $data['pelanggan'] = $this->mastermodel->customer();
		  $data['karyawan'] = $this->mastermodel->employee();
		  
		  $id = strip_tags($this->input->post('id_instalasi'));
		  $deskripsi = strip_tags(strtoupper($this->input->post('deskripsi')));
		  $status = strip_tags($this->input->post('status'));
		  $pelanggan = strip_tags($this->input->post('pelanggan'));
		  $jenis = strip_tags($this->input->post('jenis'));
		  $drawing = strip_tags($this->input->post('drawing'));
		  $pelaksana = strip_tags($this->input->post('pelaksana'));
		  $total = strip_tags($this->input->post('total'));
		  $tglmulai = strip_tags($this->input->post('tglmulai'));
		  $tglselesai = strip_tags($this->input->post('tglselesai'));
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
			
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
  
		  if($this->form_validation->run() == TRUE){				

				$data = array(
					 'deskripsi' => $deskripsi,
					 'status' => $status,
					 'id_customer' => $pelanggan,
					 'jenis' => $jenis,
					 'drawing' => $drawing,
					 'pelaksana' => $pelaksana,
					 'total' => $total,
					 'tgl_mulai' => date('Y-m-d',strtotime($tglmulai)),
					 'tgl_selesai' => date('Y-m-d',strtotime($tglselesai))
				   );	
				   
				   
				 $this->transmodel->edit_ins($id,$data);
				 redirect('instalasi/detail_ins/');
				
		    }
			else{
				$this->template->set('title', 'Edit Instalasi');
				$this->template->load('template','instalasi/edit_ins', $data);
				}
				
			//=====================================================================
			
	   }
	   public function delete_ins()
	     {
		  $this->load->model('usermodel');
		  // $this->load->model('mastermodel');
		  $this->load->model('transmodel');
		  
		  $id = $this->uri->segment(3);
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
		  
		  $this->transmodel->delete_ins($id);
		  redirect('instalasi/detail_ins/');
		  	
			//=====================================================================
			
	   }

	}
