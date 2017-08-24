<?php 

  if(!defined('BASEPATH'))
     exit('No direct script access allowed');

  class Dashboardmodel extends CI_Model
  {
	 
	 //-------------Item Urgent---------------
	 public function item()//select
	 {
	   $item = $this->db->query('SELECT COUNT(ID_BARANG) FROM ITEM WHERE GRUP = "Utama"'); 
	   return $item;
	 }
	 //-------------Total Customer------------
	 public function customer()//select
	 {
	   return $this->db->query("SELECT COUNT(ID_CUSTOMER) FROM CUSTOMER");
	 }
	 //-------------Instalasi Baru------------
	 public function instalasi()
	 {
   	   return $this->db->query("SELECT COUNT(ID_INSTALASI) FROM INSTALASI WHERE TGL_ENTRI <= SYSDATE()");
	 }
	 //-------------Kontrak Jatuh Tempo------------
	 public function kontrak()
	 {
   	   return $this->db->query("SELECT COUNT(ID_KONTRAK) FROM KONTRAK WHERE TGL_SELESAI <= SYSDATE() ");
	 }
  }
