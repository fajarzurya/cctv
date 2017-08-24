<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script allowed');
	 
	
	class Home extends CI_Controller
	{
	   public function __construct()
	   {
	      parent::__construct();
		  $this->load->helper(array('form', 'url', 'file'));
	   }
	
	   public function index()
	   {
		   
	     if($this->auth->is_logged_in() == false){		
			$this->load->model('usermodel');
			$level = $this->session->userdata('level');
			$data['menu'] = $this->usermodel->get_menu_for_level($level);
			$this->template->set('title', 'Login');
		    $this->template->load('index','index');
	     }
		 else
		 {
			$this->load->model('usermodel');
			$this->load->model('suratmodel');
			
			$level = $this->session->userdata('level');
			$this->auth->restrict();
	        $this->auth->check_menu(1);
		 
			$data['menu'] = $this->usermodel->get_menu_for_level($level);
			$data['id_surat'] = $this->usermodel->get_max_surat();
			
			$id = $this->session->userdata('user_id');
			
			$data['data_surat'] = $this->suratmodel->get_surat($id);
			
			$data['sifat_surat'] = $this->suratmodel->get_sifat();
			$data['sifat_surat2'] = $this->suratmodel->get_sifat();
			
			$data['data_jabatan'] = $this->suratmodel->get_jabatan();
			$data['data_jabatan2'] = $this->suratmodel->get_jabatan();
			
			$this->load->library('form_validation');
		    $this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
		  
		    $this->form_validation->set_error_delimiters('<span style="color:#FF0000">', '</span>');
          
		    $this->template->set('title', 'Selamat Datang di Surat Masuk');
			$this->template->load('template', 'admin/index', $data);

		 }
	      
	   }
	   public function tambah_disposisi()
	   {
		   
			$this->load->model('usermodel');
			$this->load->model('suratmodel');
			
			$id = $this->uri->segment(3);
			$data['id_data'] = $this->uri->segment(3);
			
			$level = $this->session->userdata('level');
			$this->auth->restrict();
	        $this->auth->check_menu(1);
			
			$data['menu'] = $this->usermodel->get_menu_for_level($level);
			$data['data_surat'] = $this->suratmodel->get_surat_id($id);
			
			$data['disposisi'] = $this->suratmodel->get_disposisi($id);
			$data['disposisi2'] = $this->suratmodel->get_disposisi($id);
			
			$data['sifat_surat'] = $this->suratmodel->get_sifat();
			$data['sifat_surat2'] = $this->suratmodel->get_sifat();
			
			$data['data_jabatan'] = $this->suratmodel->get_jabatan();
			$data['data_jabatan2'] = $this->suratmodel->get_jabatan();
						
			$this->load->library('form_validation');
		    $this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
		  
		    $this->form_validation->set_error_delimiters('<span style="color:#FF0000">', '</span>');
          
		    $this->template->set('title', 'Tambah Disposisi');
			$this->template->load('template', 'admin/indexdisposisi', $data);
			//redirect(base_url().'asset/add/index.php?xi='.$id);
	   }
	   
	   
	  public function delete_surat()
	   {
		 $this->auth->restrict();
		 $this->auth->check_menu(1);
		 
		 $this->load->model('suratmodel');
		 
		 $id = $this->uri->segment(3);
		 
		 $this->suratmodel->delete_surat($id);
		 redirect('home/');
	   }
	   public function delete_disposisi()
	   {
		 $this->auth->restrict();
		 $this->auth->check_menu(1);
		 
		 $this->load->model('suratmodel');
		 
		 $id = $this->uri->segment(3);
		 $id2 = $this->uri->segment(4);
		 
		 $this->suratmodel->delete_disposisi($id2);
		 redirect('home/tambah_disposisi/'.$id);	 
	   }
	   
	   public function insert_surat()
	   {
			$this->load->model('usermodel');
			$this->load->model('suratmodel');
			
			$level = $this->session->userdata('level');
			$data['menu'] = $this->usermodel->get_menu_for_level($level);
			
			$this->auth->restrict();
		  	$this->auth->check_menu(1);
		  	$this->load->library('form_validation');
//==========================================================================================================
			

			$kode_agenda = $this->input->post('noagenda'); //no agenda
			$kode_user = $this->session->userdata('user_id'); //no agenda
			$kode_user2 = $this->session->userdata('user_id'); //no agenda
			
			if($kode_user==1){
				$kode_user = 'DIRUT';
				}
			else if($kode_user==2){
				$kode_user = 'DIRKEU';
				}
			else if($kode_user==3){
				$kode_user = 'DIROP';
				}
			else if($kode_user==4){
				$kode_user = 'DIRSDM';
				}
			else if($kode_user==5){
				$kode_user = 'DIRENSAR';
				}
			else if($kode_user==6){
				$kode_user = 'SEKPER';
				}
			else if($kode_user==7){
				$kode_user = 'DIRPRO';	
				}
				
			$bln = date('m');
			$thn = date('Y');
			
			if($bln==1){ $bln = 'I';}
			else if($bln==2){ $bln = 'II';}
			else if($bln==3){ $bln = 'III';}
			else if($bln==4){ $bln = 'IV';}
			else if($bln==5){ $bln = 'V';}
			else if($bln==6){ $bln = 'VI';}
			else if($bln==7){ $bln = 'VII';}
			else if($bln==8){ $bln = 'VIII';}
			else if($bln==9){ $bln = 'IX';}
			else if($bln==10){ $bln = 'X';}
			else if($bln==11){ $bln = 'XI';}
			else if($bln==12){ $bln = 'XII';}
			
			
				
			//$temp2 = $this->suratmodel->get_max_id($kode_agenda,$kode_user2);
			$temp2 = $this->suratmodel->get_max_id($kode_user2);
			$jml = $temp2->num_rows();
			$max_agenda = $temp2->row()->NOMOR_AGENDA;
			
			
			//echo $this->suratmodel->get_max_id($kode_user2)->row()->NOMOR_AGENDA.'<br>';
		
						
				$exp = explode('/',$max_agenda);
				
				$exp0 = $exp[0];//nomor
				
				if(empty($jml) or $jml==NULL or $jml==''){
					//echo $noagenda = "0/".$kode_agenda."/".$kode_user."/".$bln."/".$thn;
					 $noagenda = $exp0."/".$kode_agenda."/".$kode_user."/".$bln."/".$thn;
					}
				else{
					 $noagenda = $temp2->row()->NOMOR_AGENDA; 
					}
				
				
				if($max_agenda == NULL){
					//echo $max_agenda = "0/".$kode_agenda."/".$kode_user."/".$bln."/".$thn;
					 $max_agenda = $exp0."/".$kode_agenda."/".$kode_user."/".$bln."/".$thn;
					}
				else{
					 $max_agenda = $temp2->row()->NOMOR_AGENDA;
					}
					
					

				$exp = explode('/',$max_agenda);
				
				$exp0 = $exp[0];//nomor
				$exp1 = $exp[1];//kode_agenda
				$exp2 = $exp[2];//kode_user
				$exp3 = $exp[3];//bln
				$exp4 = $exp[4];//thn
				
				
				
				if($thn==$exp4){//jika tahun sudah ada
					if($kode_agenda==$exp1){//jika kode sudah ada
					
						$getid = (int)$exp0 + 1;
						$new_id0 = sprintf('%04s', $getid);	
						$new_id1 = $kode_agenda;
						$new_id2 = $exp2;//kode_user
						$new_id3 = $exp3;//bln
						$new_id4 = $exp4;//thn
						
						$new_agenda = $new_id0."/".$new_id1."/".$new_id2."/".$bln."/".$new_id4;
						}
					else{//jika kode belum ada
						//select max (id) no.ba like %$exp5%
						
						//$getid = 0 + 1;
						$getid = (int)$exp0 + 1;
						$new_id0 = sprintf('%04s', $getid);	
						$new_id1 = $kode_agenda;
						$new_id2 = $exp2;//kode_user
						$new_id3 = $exp3;//bln
						$new_id4 = $exp4;//thn
						
						$new_agenda = $new_id0."/".$new_id1."/".$new_id2."/".$bln."/".$new_id4;
						}
					}
				else{//jika tahun belum ada
					if($kode_agenda==$exp1){//jika kode sudah ada
						//select max (id) no.ba like %$exp4%
						
						
						//$getid = 0 + 1;
						$getid = (int)$exp0 + 1;
						$new_id0 = sprintf('%04s', $getid);	
						$new_id1 = $kode_agenda;
						$new_id2 = $exp2;//kode_user
						$new_id3 = $exp3;//bln
						$new_id4 = date('Y');//thn
						
						$new_agenda = $new_id0."/".$new_id1."/".$new_id2."/".$bln."/".$new_id4;
						
						}
					else{//jika kode belum ada
						//select max (id) no.ba like %$exp5%
					
						//$getid = 0 + 1;
						$getid = (int)$exp0 + 1;
						$new_id0 = sprintf('%04s', $getid);	
						$new_id1 = $kode_agenda;
						$new_id2 = $exp2;//kode_user
						$new_id3 = $exp3;//bln
						$new_id4 = date('Y');//thn

						
						$new_agenda = $new_id0."/".$new_id1."/".$new_id2."/".$bln."/".$new_id4;
						}
					}
					
					
					// echo $new_agenda;
//========================================================================================
//0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
	
	$file_name = $_FILES['lampiran']['name'];
    if($file_name != NULL) {

      $config['upload_path'] = './asset/files'; 
      $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
 		
	  $file_name = $_FILES['lampiran']['name'];
	  $extension = explode(".", $file_name);
	  $nama = str_replace('/','-',$new_agenda);
	  $nama = $nama.".".$extension[1];
	  
	  $config['file_name'] = $nama;
	  
	  $this->load->library('upload', $config);
	  $this->upload->overwrite = true;

	  $direktori = "files/$file_name";

	  $upload = $this->upload->do_upload('lampiran');
		
    }
	else{
		$nama = "";
		}
  
	
//0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
			
			$data = array(
			  'ID_SURAT' =>  strip_tags($this->input->post('id')),
			  'ID_SIFAT_SURAT' =>  strip_tags($this->input->post('sifatsurat')),
			  'NOMOR_AGENDA' =>  $new_agenda,
			  'NOMOR' =>  strip_tags($this->input->post('nomor')),
			  'DARI' =>  strip_tags($this->input->post('dari')),
			  'KEPADA' =>  strip_tags($this->input->post('jenis')),
			  'TGL_SURAT' =>  strip_tags($this->input->post('tglsurat')),
			  'TGL_PENERIMAAN' =>  strip_tags($this->input->post('tglterima')),
			  'PERIHAL' =>  strip_tags($this->input->post('perihal')),
			  'LAMPIRAN' =>  $nama,
			  'ID_USR' =>  $kode_user2
			 );
							 
			 $this->suratmodel->insert_surat($data);
			 redirect('home/tambah_disposisi/'.$this->input->post('id'));   
			 
			//echo $new_agenda;
	   }
	   public function insert_disposisi()
	   {
			$this->load->model('usermodel');
			$this->load->model('suratmodel');
			
			$level = $this->session->userdata('level');
			$this->auth->restrict();
	        $this->auth->check_menu(1);
			
			
			$data['menu'] = $this->usermodel->get_menu_for_level($level);
			
			$this->auth->restrict();
		  	$this->auth->check_menu(1);
		  	$this->load->library('form_validation');		

			$data = array(
			  'ID_SURAT' =>  strip_tags($this->input->post('idsurat')),
			  'ID_JABATAN' =>  strip_tags($this->input->post('idjabatan')),
			  'NAMA' =>  strip_tags($this->input->post('nama')),
			  'KETERANGAN' =>  strip_tags($this->input->post('keterangan')),
			  'TGL_DITERIMA' =>  strip_tags($this->input->post('tglterima'))
			 );
			 
			 $this->suratmodel->insert_disposisi($data);
			 redirect('home/tambah_disposisi/'.$this->input->post('idsurat'));	   
			 
 
	   }
	   
	   public function update_disposisi()
	   {
			$this->load->model('usermodel');
			$this->load->model('suratmodel');
			
			$level = $this->session->userdata('level');
			$this->auth->restrict();
	        $this->auth->check_menu(1);
			
			$data['menu'] = $this->usermodel->get_menu_for_level($level);
		  	$this->load->library('form_validation');		
			
			$id = strip_tags($this->input->post('id'));
			$idx = strip_tags($this->input->post('idx'));
			$data = array(
			  'ID_JABATAN' =>  strip_tags($this->input->post('idjabatan')),
			  'NAMA' =>  strip_tags($this->input->post('nama')),
			  'KETERANGAN' =>  strip_tags($this->input->post('keterangan')),
			  'TGL_DITERIMA' =>  strip_tags($this->input->post('tglterima'))
			 );
			 
			 $this->suratmodel->update_disposisi($id,$data);
			 redirect('home/tambah_disposisi/'.$idx);	   
			 
 
	   }
	   
	   
	   public function update_surat()
	   {
			$this->load->model('usermodel');
			$this->load->model('suratmodel');
			
			$level = $this->session->userdata('level');
			$this->auth->restrict();
	        $this->auth->check_menu(1);
			
			$data['menu'] = $this->usermodel->get_menu_for_level($level);
			
			$this->auth->restrict();
		  	$this->auth->check_menu(1);
		  	$this->load->library('form_validation');		
			
			$new_agenda = $this->input->post('noagenda');
			
			$id = strip_tags($this->input->post('id'));
			//00000000000000000000000000000000000000000000000000000000000000000000000000
			$file_name = $_FILES['lampiran']['name'];
			if($file_name != NULL) {
		
			  $config['upload_path'] = './asset/files'; 
			  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
				
			  $file_name = $_FILES['lampiran']['name'];
			  $extension = explode(".", $file_name);
			  $nama = str_replace('/','-',$new_agenda);
			  $nama = $nama.".".$extension[1];
			  
			  $config['file_name'] = $nama;
			  
			  $this->load->library('upload', $config);
			  $this->upload->overwrite = true;
		
			  $direktori = "files/$file_name";
		
			  $upload = $this->upload->do_upload('lampiran');
			  
			  $data = array(
			  'ID_SIFAT_SURAT' =>  strip_tags($this->input->post('sifatsurat')),
			  'NOMOR_AGENDA' =>  strip_tags($this->input->post('noagenda')),
			  'NOMOR' =>  strip_tags($this->input->post('nomor')),
			  'DARI' =>  strip_tags($this->input->post('dari')),
			  'KEPADA' =>  strip_tags($this->input->post('jenis')),
			  'TGL_SURAT' =>  strip_tags($this->input->post('tglsurat')),
			  'TGL_PENERIMAAN' =>  strip_tags($this->input->post('tglpenerimaan')),
			  'PERIHAL' =>  strip_tags($this->input->post('perihal')),
			  'LAMPIRAN' =>  $nama
			 );
			  
			}
			else{
				
			$data = array(
			  'ID_SIFAT_SURAT' =>  strip_tags($this->input->post('sifatsurat')),
			  'NOMOR_AGENDA' =>  strip_tags($this->input->post('noagenda')),
			  'NOMOR' =>  strip_tags($this->input->post('nomor')),
			  'DARI' =>  strip_tags($this->input->post('dari')),
			  'KEPADA' =>  strip_tags($this->input->post('jenis')),
			  'TGL_SURAT' =>  strip_tags($this->input->post('tglsurat')),
			  'TGL_PENERIMAAN' =>  strip_tags($this->input->post('tglpenerimaan')),
			  'PERIHAL' =>  strip_tags($this->input->post('perihal'))
			 );
			}
			//00000000000000000000000000000000000000000000000000000000000000000000000000
			
							 
			 $this->suratmodel->update_surat($id,$data);
			 redirect('home/');	   
			 
 
	   }
	   
	   public function update_surat2()
	   {
			$this->load->model('usermodel');
			$this->load->model('suratmodel');
			
			$level = $this->session->userdata('level');
			$this->auth->restrict();
	        $this->auth->check_menu(1);
			
			$data['menu'] = $this->usermodel->get_menu_for_level($level);
			
			$this->auth->restrict();
		  	$this->auth->check_menu(1);
		  	$this->load->library('form_validation');		
			
			$new_agenda = $this->input->post('noagenda');
			
			$id = strip_tags($this->input->post('idsurat'));
			
			//00000000000000000000000000000000000000000000000000000000000000000000000000
			$file_name = $_FILES['lampiran']['name'];
			
			$data = array(
			  'ID_DISPOSISI' =>  strip_tags($this->input->post('disposisi'))
			 );
			//00000000000000000000000000000000000000000000000000000000000000000000000000
			
							 
			 $this->suratmodel->update_surat($id,$data);
			 //redirect('home/');	   
			 redirect('home/tambah_disposisi/'.$this->input->post('idsurat'));	   
			 
 
	   }
	   
	   
	   //================================
	   public function login()
	   {
		  $this->load->model('usermodel');
		   
	      $this->load->library('form_validation');
		  $this->form_validation->set_rules('username', 'Username', 'trim|required');
		  $this->form_validation->set_rules('password', 'Password', 'trim|required');
		  $this->form_validation->set_error_delimiters('<span style="color:#FF0000">','</span>');
		  
		  if($this->form_validation->run() == FALSE)
		  {
		     $this->template->set('title', 'Login');
			 $this->template->load('index','index');
		  } 
		  else
		  {
		     $username = $this->input->post('username');
			 $password = md5($this->input->post('password'));
			 $success = $this->auth->do_login($username, $password);
			 
			 if($success){
			   redirect('home');
			 }
			 else
			 {
				$this->template->set('title', 'Login Salah');
			    $data['login_info'] = 'Maaf, username dan password salah! ';
				echo "<div class='loginsalah'>Maaf, username dan password salah!</div>";
				$this->template->load('index','index', $data);
			 }		  
		  }  
	   }

	   
	   public function logout()
	   {
		  if($this->auth->is_logged_in() == true)
		  $this->auth->do_logout();			
		  redirect('home/');
	   }

	}
