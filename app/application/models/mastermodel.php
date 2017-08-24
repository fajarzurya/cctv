<?php 

  if(!defined('BASEPATH'))
     exit('No direct script access allowed');

  class Mastermodel extends CI_Model
  {
	 
	 public function user()//select
	 {
	   return $this->db->query('SELECT * FROM USER_');
	 }
	 public function user_id($id)//select
	 {
	   return $this->db->query("SELECT * FROM USER_ WHERE ID_USER = '".$id."'");
	 }
	 
	 //--------------------Item---------------
	 public function kode_brg()//select id max customer
	 {
		 $this->db->select('RIGHT(ITEM.ID_BARANG,5) as kode', FALSE);
		 $this->db->order_by('ID_BARANG','DESC');    
		 $this->db->limit(1);    
		 $query = $this->db->get('ITEM');      //cek dulu apakah ada sudah ada kode di tabel.    
		 if($query->num_rows() <> 0){      
			 //jika kode ternyata sudah ada.      
			 $data = $query->row();      
			 $kode = intval($data->kode) + 1;    
		 }else{      
		 //jika kode belum ada      
		 $kode = 1;    
		 }
		 $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);    
		 $kodejadi = "I".$kodemax;    
		 return $kodejadi;  
	 }
	 public function item()//select
	 {
	   return $this->db->query('SELECT * FROM ITEM I JOIN SATUAN S ON I.ID_SATUAN = S.ID_SATUAN WHERE I.STATUS = "Aktif"');
	 }
	 public function item_id($id)//select
	 {
	   return $this->db->query("SELECT * FROM ITEM WHERE ID_BARANG = '".$id."'");
	 }
	 public function tambah_item($data)//insert
	 {
   	   $this->db->insert('ITEM',$data); 
	 }
	 public function edit_item($id,$data)//edit
	 {
	   $this->db->where('ID_BARANG',$id);
   	   $this->db->update('ITEM',$data); 
	 }
	 public function delete_item($id)//delete
	 {
	   $this->db->query("DELETE FROM ITEM WHERE ID_BARANG = '".$id."'"); 
	 }
	 public function satuan()//select
	 {
	   return $this->db->query('SELECT * FROM SATUAN');
	 }
	 
	 //---------------Inventaris----------------------
	 public function inventaris()//select
	 {
	   return $this->db->query('SELECT * FROM INVENTARIS IV JOIN ITEM I
	   ON IV.ID_BARANG = I.ID_BARANG JOIN GUDANG G ON IV.ID_GUDANG = G.ID_GUDANG');
	 }
	 public function inventaris_id($id)//select
	 {
	   return $this->db->query("SELECT * FROM ITEM I JOIN SATUAN S ON I.ID_SATUAN = S.ID_SATUAN WHERE ID_BARANG = '".$id."'");
	 }
	 public function tambah_inv($data)//insert
	 {
   	   $this->db->insert('INVENTARIS',$data); 
	 }
	 public function kode_inv()//select id max inventaris
	 {
		 $this->db->select('LEFT(INVENTARIS.ID_INVENTARIS,3) as kode', FALSE);
		 $this->db->order_by('ID_INVENTARIS','DESC');    
		 $this->db->limit(1);    
		 $query = $this->db->get('INVENTARIS');      //cek dulu apakah ada sudah ada kode di tabel.    
		 if($query->num_rows() <> 0){      
			 //jika kode ternyata sudah ada.      
			 $data = $query->row();      
			 $kode = intval($data->kode) + 1;    
		 }else{      
		 //jika kode belum ada      
		 $kode = 1;    
		 }
		 $bulan = date('m');
		 $tahun = date('Y');
		 $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);    
		 $kodejadi = $kodemax."/".$bulan."/".$tahun;    
		 return $kodejadi;  
	 }
	 public function gudang()//select
	 {
	   return $this->db->query('SELECT * FROM GUDANG');
	 }
	 
	 //---------------Customer----------------------
	 
	 public function customer()//select
	 {
	   return $this->db->query("SELECT C.ID_CUSTOMER, C.CUSTOMER, C.TIPE, 
		A.KOTA, A.KECAMATAN, A.KODE_POS, A.PROVINSI, K.HP, K.TELPON, K.EMAIL 
		FROM CUSTOMER C
		JOIN KONTAK K
		ON C.ID_KONTAK = K.ID_KONTAK
		JOIN ALAMAT A
		ON C.ID_ALAMAT = A.ID_ALAMAT");
	 }
	 public function kode_cust()//select id max customer
	 {
		 $this->db->select('RIGHT(CUSTOMER.ID_CUSTOMER,3) as kode', FALSE);
		 $this->db->order_by('ID_CUSTOMER','DESC');    
		 $this->db->limit(1);    
		 $query = $this->db->get('CUSTOMER');      //cek dulu apakah ada sudah ada kode di tabel.    
		 if($query->num_rows() <> 0){      
			 //jika kode ternyata sudah ada.      
			 $data = $query->row();      
			 $kode = intval($data->kode) + 1;    
		 }else{      
		 //jika kode belum ada      
		 $kode = 1;    
		 }
		 $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);    
		 $kodejadi = "C".$kodemax;    
		 return $kodejadi;  
	 }
	 public function cust_id($id)//select
	 {
	   return $this->db->query("SELECT * FROM CUSTOMER C JOIN KONTAK K
		ON C.ID_KONTAK = K.ID_KONTAK
		JOIN ALAMAT A
		ON C.ID_ALAMAT = A.ID_ALAMAT
		WHERE C.ID_CUSTOMER = '".$id."'");
	 }
	 public function tambah_cust($data)//insert
	 {
   	   $this->db->insert('CUSTOMER',$data); 
	 }
	 public function edit_cust($id,$data)//edit
	 {
	   $this->db->where('ID_CUSTOMER',$id);
   	   $this->db->update('CUSTOMER',$data); 
	 }
	 public function delete_cust($id)//delete
	 {
	   $this->db->query("DELETE FROM CUSTOMER WHERE ID_CUSTOMER = '".$id."'"); 
	 }
	 
	 //---------------Employee----------------------
	 public function employee()//select
	 {
	   return $this->db->query('SELECT * FROM EMPLOYEE');
	 }
	 public function em_id($id)//select
	 {
	   return $this->db->query("SELECT * FROM EMPLOYEE WHERE NOPEG = '".$id."'");
	 }
	 public function tambah_em($data)//insert
	 {
   	   $this->db->insert('EMPLOYEE',$data); 
	 }
	 public function edit_em($id,$data)//edit
	 {
	   $this->db->where('NOPEG',$id);
   	   $this->db->update('EMPLOYEE',$data); 
	 }
	 public function delete_em($id)//delete
	 {
	   $this->db->query("DELETE FROM EMPLOYEE
						   WHERE NOPEG =
						  '".$id."'"); 
	 }
	 public function kode_em()//select id max employee
	 {
		 $this->db->select('RIGHT(EMPLOYEE.NOPEG,3) as kode', FALSE);
		 $this->db->order_by('NOPEG','DESC');    
		 $this->db->limit(1);    
		 $query = $this->db->get('EMPLOYEE');      //cek dulu apakah ada sudah ada kode di tabel.    
		 if($query->num_rows() <> 0){      
			 //jika kode ternyata sudah ada.      
			 $data = $query->row();      
			 $kode = intval($data->kode) + 1;    
		 }else{      
		 //jika kode belum ada      
		 $kode = 1;    
		 }
		 $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);    
		 $kodejadi = "K".$kodemax;    
		 return $kodejadi;  
	 }
	 
	 //---------------Kontak------------------------
	 public function kode_ktk()//select id max kontak
	 {
		 $this->db->select('(KONTAK.ID_KONTAK) as kode', FALSE);
		 $this->db->order_by('ID_KONTAK','DESC');    
		 $this->db->limit(1);    
		 $query = $this->db->get('KONTAK');      //cek dulu apakah ada sudah ada kode di tabel.    
		 if($query->num_rows() <> 0){      
			 //jika kode ternyata sudah ada.      
			 $data = $query->row();      
			 $kode = intval($data->kode) + 1;    
		 }else{      
		 //jika kode belum ada      
		 $kode = 1;    
		 }   
		 return $kode;  
	 }
	 public function edit_kon($id,$data)//edit
	 {
	   $this->db->where('ID_KONTAK',$id);
   	   $this->db->update('KONTAK',$data); 
	 }
	 public function tambah_kon($data)//insert
	 {
   	   $this->db->insert('KONTAK',$data); 
	 }
	 
	 //---------------Alamat----------------------
	 public function kode_almt()//select id max alamat
	 {
		 $this->db->select('(ALAMAT.ID_ALAMAT) as kode', FALSE);
		 $this->db->order_by('ID_ALAMAT','DESC');    
		 $this->db->limit(1);    
		 $query = $this->db->get('ALAMAT');      //cek dulu apakah ada sudah ada kode di tabel.    
		 if($query->num_rows() <> 0){      
			 //jika kode ternyata sudah ada.      
			 $data = $query->row();      
			 $kode = intval($data->kode) + 1;    
		 }else{      
		 //jika kode belum ada      
		 $kode = 1;    
		 } 
		 return $kode;  
	 }
	 public function edit_almt($id,$data)//edit
	 {
	   $this->db->where('ID_ALAMAT',$id);
   	   $this->db->update('ALAMAT',$data); 
	 }
	 public function tambah_almt($data)//insert
	 {
   	   $this->db->insert('ALAMAT',$data); 
	 }
  }
