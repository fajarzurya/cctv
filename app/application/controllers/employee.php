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
		  
		  $data['kode_em'] = $this->mastermodel->kode_em();
		  $nopeg = strip_tags($this->input->post('nopeg'));
		  $nama = strip_tags(strtoupper($this->input->post('nama')));
		  $status = strip_tags($this->input->post('status'));
		  $jabatan = strip_tags($this->input->post('jabatan'));
		  $departemen = strip_tags($this->input->post('departemen'));
		  $tglmasuk = strip_tags($this->input->post('tglmasuk'));
		  
		  $id_kontak = $this->mastermodel->kode_ktk();
		  $kontak = strip_tags(strtoupper($this->input->post('kontak')));
		  $email = strip_tags($this->input->post('email'));
		  $hp = strip_tags($this->input->post('hp'));
		  $phone = strip_tags($this->input->post('phone'));
		   
		  $id_alamat = $this->mastermodel->kode_almt();
		  $kodepos = strip_tags($this->input->post('kodepos'));
		  $kecamatan = strip_tags($this->input->post('kecamatan'));
		  $kota = strip_tags($this->input->post('kota'));
		  $provinsi = strip_tags($this->input->post('provinsi'));
		  $alamat = strip_tags($this->input->post('alamat'));
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
			
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('nama', 'nama', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
  
		  if($this->form_validation->run() == TRUE){				

				$data_em = array(
					 'nopeg' => $nopeg,
					 'nama' => $nama,
					 'status' => $status,
					 'jabatan' => $jabatan,
					 'departemen' => $departemen,
					 'tgl_masuk' => date('Y-m-d',strtotime($tglmasuk))
				   );	
				
				$data_ktk = array(
					 'kontak' => $kontak,
					 'email' => $email,
					 'hp' => $hp,
					 'telpon' => $phone
				   );

				$data_almt = array(
					 'kode_pos' => $kodepos,
					 'kecamatan' => $kecamatan,
					 'kota' => $kota,
					 'provinsi' => $provinsi,
					 'alamat' => $alamat
				   );				
				   
				 $this->mastermodel->tambah_em($data_em);
				 $this->mastermodel->tambah_kon($data_ktk);
				 $this->mastermodel->tambah_almt($data_almt);
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
