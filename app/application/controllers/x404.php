<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script allowed');
	 
	
	class x404 extends CI_Controller
	{
	   public function __construct()
	   {
	      parent::__construct();
	   }
	   
	   public function index()
	   {

			$this->template->set('title', '404');
		    $this->template->load('404','404');

	   }
	   public function data_sama()
	   {

			$this->template->set('title', 'Data Kembar');
		    $this->template->load('kembar','kembar');

	   }

	}
?>