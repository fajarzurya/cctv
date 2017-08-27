<?php 

  if(!defined('BASEPATH'))
     exit('No direct script access allowed');

  class Dashboardmodel extends CI_Model
  {
	 
	 //-------------Item Urgent---------------
	 public function item()//select
	 {
	   $a = $this->db->query('SELECT * FROM ITEM WHERE GRUP = "Utama"'); 
	   return $a;
	 }
	 //-------------Total Customer------------
	 public function customer()//select
	 {
	   $c = $this->db->query("SELECT * FROM CUSTOMER");
	   return $c;
	 }
	 //-------------Instalasi Baru------------
	 public function instalasi()
	 {
   	   return $this->db->query("SELECT * FROM INSTALASI WHERE TGL_ENTRI <= SYSDATE()");
	 }
	 //-------------Kontrak Jatuh Tempo------------
	 public function kontrak()
	 {
   	   return $this->db->query("SELECT * FROM KONTRAK WHERE TGL_SELESAI <= SYSDATE() ");
	 }
  }
