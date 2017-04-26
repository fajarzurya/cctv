<?php 

  if(!defined('BASEPATH'))
     exit('No direct script access allowed');

  class Mastermodel extends CI_Model
  {
	 
	 public function user()//select
	 {
	   return $this->db->query('SELECT * FROM USER_');
	 }
	 
	 //--------------------Item---------------
	 public function item()//select
	 {
	   return $this->db->query('SELECT * FROM ITEM');
	 }
	 public function item_id($id)//select
	 {
	   return $this->db->query("SELECT * FROM ITEM WHERE ID = '".$id."'");
	 }
	 public function tambah_item($data)//insert
	 {
   	   $this->db->insert('ITEM',$data); 
	 }
	 public function edit_item($id,$data)//edit
	 {
	   $this->db->where('ID',$id);
   	   $this->db->update('ITEM',$data); 
	 }
	 public function delete_item($id,$status)//edit
	 {
	   $this->db->query("UPDATE SUBDIT
						   SET STATUS_= '".$status."'
						   WHERE ID_SUBDIT=
						  ".$id); 
	 }
	 //---------------dashboard---------------------
	 public function count_pasien_jk($kl,$th)//select
	 {
	   return $this->db->query('SELECT * FROM PASIEN WHERE KELAMIN = "'.$kl.'" AND TAHUN = "'.$th.'"');
	 }
	 public function count_pasien_um($um,$th)//select
	 {
	   return $this->db->query('SELECT * FROM PASIEN WHERE USIA = "'.$um.'"  AND TAHUN = "'.$th.'" ');
	 }
  }
