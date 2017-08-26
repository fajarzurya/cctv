<?php 

  if(!defined('BASEPATH'))
     exit('No direct script access allowed');

  class Transmodel extends CI_Model
  {
	 function kondisi($a){
	   return $this->db->query("SELECT INS.id_instalasi, INS.deskripsi,
	   C.customer, INS.tgl_mulai, INS.tgl_selesai, E.nama, INS.status
	   FROM INSTALASI INS JOIN
	   CUSTOMER C ON INS.ID_CUSTOMER = C.ID_CUSTOMER JOIN
	   EMPLOYEE E ON INS.PELAKSANA = E.NOPEG
	   WHERE INS.STATUS IN (".$a.")"); 
	 }
	 //--------------------Instalasi---------------
	 public function kode_instalasi()//select id max instalasi
	 {
		 $this->db->select('SUBSTRING(INSTALASI.ID_INSTALASI,4,3) as kode', FALSE);
		 $this->db->order_by('ID_INSTALASI','DESC');    
		 $this->db->limit(1);    
		 $query = $this->db->get('INSTALASI');      //cek dulu apakah ada sudah ada kode di tabel.    
		 if($query->num_rows() <> 0){      
			 //jika kode ternyata sudah ada.      
			 $data = $query->row();      
			 $kode = intval($data->kode) + 1;    
		 }else{      
		 //jika kode belum ada      
		 $kode = 1;    
		 }
		 $bulan = date('m');
		 $tahun = date('y');
		 $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);    
		 //$kodejadi = "INS".$tahun.$bulan.$kodemax;
		 $kodejadi = "INS".$kodemax."-".$bulan."-".$tahun;		 
		 return $kodejadi;  
	 }
	 public function instalasi()//select
	 {
	   // return $this->db->query('SELECT INS.id_instalasi, INS.deskripsi,
	   // C.customer, INS.tgl_mulai, INS.tgl_selesai, E.nama, INS.status
	   // FROM INSTALASI INS JOIN
	   // CUSTOMER C ON INS.ID_CUSTOMER = C.ID_CUSTOMER JOIN
	   // EMPLOYEE E ON INS.PELAKSANA = E.NOPEG
	   // WHERE INS.STATUS IN ("Aktif","Pending")');
	   $ins = '"Aktif","Pending"';
	   return $this->kondisi($ins);
	 }
	 public function instalasi_id($id)//select
	 {
	   return $this->db->query("SELECT * FROM INSTALASI WHERE ID_INSTALASI = '".$id."'");
	 }
	 public function tambah_ins($data)//insert
	 {
   	   $this->db->insert('INSTALASI',$data); 
	 }
	 public function edit_ins($id,$data)//edit
	 {
	   $this->db->where('ID_INSTALASI',$id);
   	   $this->db->update('INSTALASI',$data); 
	 }
	 public function delete_ins($id)//delete
	 {
	   $this->db->query("DELETE FROM INSTALASI
						   WHERE ID_INSTALASI=
						  '".$id."'"); 
	 }
	 
	 //--------------------Pemeliharaan---------------
	 public function kode_mtnc()//select id max
	 {
		 $this->db->select('SUBSTRING(PEMELIHARAAN.ID_PEMELIHARAAN,4,3) as kode', FALSE);
		 $this->db->order_by('ID_PEMELIHARAAN','DESC');    
		 $this->db->limit(1);    
		 $query = $this->db->get('PEMELIHARAAN');      //cek dulu apakah ada sudah ada kode di tabel.    
		 if($query->num_rows() <> 0){      
			 //jika kode ternyata sudah ada.      
			 $data = $query->row();      
			 $kode = intval($data->kode) + 1;    
		 }else{      
		 //jika kode belum ada      
		 $kode = 1;    
		 }
		 $bulan = date('m');
		 $tahun = date('y');
		 $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);    
		 //$kodejadi = "INS".$tahun.$bulan.$kodemax;
		 $kodejadi = "PLHR".$kodemax."-".$bulan."-".$tahun;		 
		 return $kodejadi;  
	 }
	 public function pemeliharaan()//select
	 {
	   return $this->db->query('SELECT * FROM INSTALASI');
	 }
	 public function pemeliharaan_id($id)//select
	 {
	   return $this->db->query("SELECT * FROM PEMELIHARAAN WHERE ID_PEMELIHARAAN = '".$id."'");
	 }
	 public function tambah_mtnc($data)//insert
	 {
   	   $this->db->insert('PEMELIHARAAN',$data); 
	 }
	 public function edit_mtnc($id,$data)//edit
	 {
	   $this->db->where('ID',$id);
   	   $this->db->update('PEMELIHARAAN',$data); 
	 }
	 public function delete_mtnc($id)//delete
	 {
	   $this->db->query("DELETE FROM PEMELIHARAAN
						   WHERE ID_PEMELIHARAAN=
						  ".$id); 
	 }
	 //--------------Pelepasan---------------
	 public function pelepasan()//select
	 {
	   // return $this->db->query('SELECT INS.id_instalasi, INS.deskripsi,
	   // C.customer, INS.tgl_mulai, INS.tgl_selesai, E.nama, INS.status
	   // FROM INSTALASI INS JOIN
	   // CUSTOMER C ON INS.ID_CUSTOMER = C.ID_CUSTOMER JOIN
	   // EMPLOYEE E ON INS.PELAKSANA = E.NOPEG
	   // WHERE INS.STATUS = "Disetujui1"');
	   $lepas = '"Disetujui1"';
	   return $this->kondisi($lepas);
	 }
	 public function pelepasan_id($id)//select
	 {
	   return $this->db->query("SELECT * FROM INSTALASI WHERE ID_INSTALASI = '".$id."'");
	 }
	 public function tambah_lepas($data)//insert
	 {
   	   $this->db->insert('PELEPASAN',$data); 
	 }
  }
