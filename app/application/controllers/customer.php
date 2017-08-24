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
		  
		  $level = $this->session->userdata('level');
		  
		  $kode = strip_tags($this->input->post('kode'));
		   $deskripsi = strip_tags(strtoupper($this->input->post('deskripsi'))); 
		   $tipe = strip_tags($this->input->post('tipe'));
		   
		   $id_kontak = $this->mastermodel->kode_ktk();
		   $kontak = strip_tags($this->input->post('kontak'));
		   $email = strip_tags($this->input->post('email'));
		   $hp = strip_tags($this->input->post('hp'));
		   $phone = strip_tags($this->input->post('phone'));
		   
		   $id_alamat = $this->mastermodel->kode_almt();
		   $kodepos = strip_tags($this->input->post('kodepos'));
		   $kecamatan = strip_tags($this->input->post('kecamatan'));
		   $kota = strip_tags($this->input->post('kota'));
		   $provinsi = strip_tags($this->input->post('provinsi'));
		   $alamat = strip_tags($this->input->post('alamat'));
		   
		  //mengambil nilai kode_cust dari model
		  $data['kodecust'] = $this->mastermodel->kode_cust();
		  //mengambil nilai kode_ktk dari model
		  $data['kodektk'] = $this->mastermodel->kode_ktk();
		  
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');
  
		  if($this->form_validation->run() == TRUE){				

				$data_cust = array(
					 'id_customer' => $kode,
					 'customer' => $deskripsi,
					 'tipe' => $tipe,
					 'id_kontak' => $id_kontak,
					 'id_alamat' => $id_alamat
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
				   
				 $this->mastermodel->tambah_cust($data_cust);
				 $this->mastermodel->tambah_kon($data_ktk);
				 $this->mastermodel->tambah_almt($data_almt);
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
		  
		  $kode = strip_tags($this->input->post('kode'));
		  $deskripsi = strip_tags(strtoupper($this->input->post('deskripsi'))); 
		  $tipe = strip_tags($this->input->post('tipe'));

		  $kode_ktk = strip_tags($this->input->post('id_kontak'));
		  $kontak = strip_tags($this->input->post('kontak'));
		  $email = strip_tags($this->input->post('email'));
		  $hp = strip_tags($this->input->post('hp'));
		  $phone = strip_tags($this->input->post('phone'));
		   
		  $kode_almt = strip_tags($this->input->post('id_alamat'));
		  $kodepos = strip_tags($this->input->post('kodepos'));
		  $kecamatan = strip_tags($this->input->post('kecamatan'));
		  $kota = strip_tags($this->input->post('kota'));
		  $provinsi = strip_tags($this->input->post('provinsi'));
		  $alamat = strip_tags($this->input->post('alamat'));
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
			
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
  
		  if($this->form_validation->run() == TRUE){				

				$data = array(
					 'customer' => $deskripsi,
					 'tipe' => $tipe
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
				   
				 $this->mastermodel->edit_cust($kode,$data);
				 $this->mastermodel->edit_kon($kode_ktk,$data_ktk);
				 $this->mastermodel->edit_almt($kode_almt,$data_almt);
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
