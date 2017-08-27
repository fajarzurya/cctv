<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script allowed');
	 
	
	class Home extends CI_Controller
	{
	   public function __construct()
	   {
	      parent::__construct();
		  $this->load->model('mastermodel');
	   }
	   
	   public function index()
	   {
		 	$this->load->model('usermodel');
			$this->load->model('dashboardmodel');
			
			//$data['dokumen'] = $this->mastermodel->unit();
			// $data['item'] = $this->dashboardmodel->item();
			// $data['customer'] = $this->dashboardmodel->customer();
			// $data['instalasi'] = $this->dashboardmodel->instalasi();
			// $data['kontrak'] = $this->dashboardmodel->kontrak();

			if(empty($this->uri->segment(3))){
				  $th = date('Y');
				  }
			else{
				  $th = $this->uri->segment(3);
				  }				
			$data['th'] = $th;
			
			if($this->auth->is_logged_in() == false){	
				$data['notif'] = '0';			
		        $this->template->set('title', 'Login');
		    	$this->template->load('index', 'index');
			}
			else{
				$data['notif'] = '0';			
		        $this->template->set('title', 'Dashboard Management CCTV');
		    	$this->template->load('template', 'dashboard/dashboard',$data);
			}
		 }

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
			 $password = $this->input->post('password');
			 $success = $this->auth->do_login($username,$password);
			 
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
		 $this->auth->do_logout();			
		 //----destroy
		 session_start();
		 session_unset();
		 session_destroy();
		  	
		 redirect('home/');
	   }
	}
