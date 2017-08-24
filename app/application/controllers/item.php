<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script allowed');
	 
	
	class Item extends CI_Controller
	{
	   public function __construct()
	   {
	      parent::__construct();
		  $this->load->helper(array('form', 'url', 'file'));
	   }
	   
	   //-------------------
	   public function detail_item()
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

			$data['dokumen'] = $this->mastermodel->item();
			//$data['th'] = $th;
			
			if($this->auth->is_logged_in() == false){	
				$data['notif'] = '0';			
		        $this->template->set('title', 'Login');
		    	$this->template->load('index', 'index');
			}
			else{
				$data['notif'] = '0';			
		        $this->template->set('title', 'Detail Item');
		    	$this->template->load('template', 'item/detail_item',$data);
				}

		 }
		 
		 public function tambah_daftar()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  
		  $data["kodebrg"]=$this->mastermodel->kode_brg();
		  $noitem = strip_tags($this->input->post('noitem'));
		  $deskripsi = strip_tags(strtoupper($this->input->post('deskripsi')));
		  $status = strip_tags($this->input->post('status'));
		  $manufaktur = strip_tags($this->input->post('manufaktur'));
		  $jenis = strip_tags($this->input->post('jenis'));
		  $gambar = strip_tags($this->input->post('gambar'));
		  $satuan = strip_tags($this->input->post('satuan'));
		  $grup = strip_tags($this->input->post('grup'));
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
			
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
  
		  if($this->form_validation->run() == TRUE){				

				$data = array(
					 'ID_BARANG' => $noitem,
					 'DESKRIPSI' => $deskripsi,
					 'ID_SATUAN' => '2',
					 'STATUS' => 'Aktif',
					 'MANUFAKTUR' => $manufaktur,
					 'GRUP' => $grup,
					 'JENIS' => $jenis,
					 'GAMBAR' => $gambar
				   );	
				   
				   
				 $this->mastermodel->tambah_item($data);
				 redirect('item/detail_item/');
				
		    }
			else{
				$this->template->set('title', 'Tambah Item');
				$this->template->load('template','item/tambah_item', $data);
				}
				
			//=====================================================================
			
	   }
	   
	   public function edit_item()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  
		  $id = $this->uri->segment(3);
		  $data['dokumen'] = $this->mastermodel->item_id($id);
		  $noitem = strip_tags($this->input->post('noitem'));
		  $deskripsi = strip_tags(strtoupper($this->input->post('deskripsi')));
		  $status = strip_tags($this->input->post('status'));
		  $manufaktur = strip_tags($this->input->post('manufaktur'));
		  $jenis = strip_tags($this->input->post('jenis'));
		  $gambar = strip_tags($this->input->post('gambar'));
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
					 'ID_SATUAN' => '2',
					 'MANUFAKTUR' => $manufaktur,
					 'GRUP' => $grup,
					 'JENIS' => $jenis,
					 'GAMBAR' => $gambar
				   );	
				   
				 $this->mastermodel->edit_item($noitem,$data);
				 redirect('item/detail_item/');
		    }
			else{
				$this->template->set('title', 'Edit Item');
				$this->template->load('template','item/edit_item', $data);
				}
				
			//=====================================================================
			
	   }
	   public function delete_item()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  
		  $id = $this->uri->segment(3);
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
		  
		  //$this->load->library('form_validation');
		  //$this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
		  //$this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');
		  $this->mastermodel->delete_item($id);
		  redirect('item/detail_item/');
		  
		  /*if($this->form_validation->run() == TRUE){				
		  
				 $this->mastermodel->delete_item($id);
				 redirect('item/detail_item/');
				
		    }
			else{
				$this->template->set('title', 'Detail Item');
				$this->template->load('template','item/detail_item', $data);
				}
			*/	
			//=====================================================================
			
	   }
	   
	   //==============================Inventaris=======================================
	   public function detail_inv()
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

			$data['dokumen'] = $this->mastermodel->inventaris();
			//$data['th'] = $th;
			
			if($this->auth->is_logged_in() == false){	
				$data['notif'] = '0';			
		        $this->template->set('title', 'Login');
		    	$this->template->load('index', 'index');
			}
			else{
				$data['notif'] = '0';			
		        $this->template->set('title', 'Detail Inventaris');
		    	$this->template->load('template', 'item/detail_inv',$data);
				}

		 }
		 
		 public function edit_inv()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  
		  $id = $this->uri->segment(3);
		  $data['dokumen'] = $this->mastermodel->inventaris_id($id);
		  $data['kode_inv']=$this->mastermodel->kode_inv();
		  
		  $id_inv = strip_tags($this->input->post('id_inventaris'));
		  $id_barang = strip_tags($this->input->post('id_barangs'));
		  $jumlah = strip_tags($this->input->post('jumlah'));
		  $stok = strip_tags($this->input->post('stokminimum'));
		  $harga = strip_tags($this->input->post('harga'));
		  $kondisi = strip_tags($this->input->post('kondisi'));
		  $id_gudang = strip_tags($this->input->post('id_gudang'));
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
			
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
  
		  if($this->form_validation->run() == TRUE){				

				$data = array(
					 'ID_INVENTARIS' => $id_inv,
					 'ID_BARANG' => $id_barang,
					 'JUMLAH' => $jumlah,
					 'STOKMINIM' => $stok,
					 'HARGA' => $harga,
					 'KONDISI' => $kondisi
				   );	
				   
				   
				 $this->mastermodel->tambah_inv($data);
				 redirect('item/detail_inv/');
				
		    }
			else{
				$this->template->set('title', 'Tambah Item ke Gudang');
				$this->template->load('template','item/edit_inv', $data);
				}
			//=====================================================================
	   }
	   
	   public function tambah_inv()
	     {
		  $this->load->model('usermodel');
		  $this->load->model('mastermodel');
		  
		  $id = $this->uri->segment(3);
		  $data['dokumen'] = $this->mastermodel->inventaris_id($id);
		  $data['kode_inv']=$this->mastermodel->kode_inv();
		  $data['gudang']=$this->mastermodel->gudang();
		  
		  $id_inv = strip_tags($this->input->post('id_inventaris'));
		  $id_barang = strip_tags($this->input->post('id_barang'));
		  $jumlah = strip_tags($this->input->post('jumlah'));
		  $stok = strip_tags($this->input->post('stokminimum'));
		  $harga = strip_tags($this->input->post('harga'));
		  $kondisi = strip_tags($this->input->post('kondisi'));
		  $id_gudang = strip_tags($this->input->post('id_gudang'));
		  
		  $level = $this->session->userdata('level');
		  $data['menu'] = $this->usermodel->get_menu_for_level($level);
			
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');	
  
		  if($this->form_validation->run() == TRUE){				

				$data = array(
					 'ID_INVENTARIS' => $id_inv,
					 'ID_BARANG' => $id_barang,
					 'JUMLAH' => $jumlah,
					 'STOKMINIM' => $stok,
					 'HARGA' => $harga,
					 'KONDISI' => $kondisi,
					 'ID_GUDANG' => $id_gudang
				   );	
				   
				   
				 $this->mastermodel->tambah_inv($data);
				 redirect('item/detail_inv/');
				
		    }
			else{
				$this->template->set('title', 'Tambah Item ke Gudang');
				$this->template->load('template','item/tambah_inv', $data);
				}
				
			//=====================================================================
			
	   }

	}
