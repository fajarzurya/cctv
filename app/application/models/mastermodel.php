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
	 public function delete_item($id)//delete
	 {
	   $this->db->query("DELETE FROM ITEM
						   WHERE ID=
						  ".$id); 
	 }
	 
	 //---------------Customer----------------------
	 public function customer()//select
	 {
	   return $this->db->query('SELECT * FROM CUSTOMER');
	 }
	 public function cust_id($id)//select
	 {
	   return $this->db->query("SELECT * FROM CUSTOMER WHERE ID = '".$id."'");
	 }
	 public function tambah_cust($data)//insert
	 {
   	   $this->db->insert('CUSTOMER',$data); 
	 }
	 public function edit_cust($id,$data)//edit
	 {
	   $this->db->where('ID',$id);
   	   $this->db->update('CUSTOMER',$data); 
	 }
	 public function delete_cust($id)//delete
	 {
	   $this->db->query("DELETE FROM CUSTOMER
						   WHERE ID=
						  ".$id); 
	 }
	 
	 //---------------Employee----------------------
	 public function employee()//select
	 {
	   return $this->db->query('SELECT * FROM EMPLOYEE');
	 }
	 public function em_id($id)//select
	 {
	   return $this->db->query("SELECT * FROM EMPLOYEE WHERE ID = '".$id."'");
	 }
	 public function tambah_em($data)//insert
	 {
   	   $this->db->insert('EMPLOYEE',$data); 
	 }
	 public function edit_em($id,$data)//edit
	 {
	   $this->db->where('ID',$id);
   	   $this->db->update('EMPLOYEE',$data); 
	 }
	 public function delete_em($id)//delete
	 {
	   $this->db->query("DELETE FROM EMPLOYEE
						   WHERE ID=
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
