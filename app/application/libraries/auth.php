<?php 
  
  if(!defined('BASEPATH'))
    exit('No direct script access allowed');
	
/**
  Auth library
  @author IT-PJBS
*/

class Auth
{
   var $CI = NULL;
   
   function __construct()
   {
      //get CI's object
	  $this->CI =& get_instance();
   }
   //End of constructor
   
   //Untuk validasi login
   function do_login($username,$password)
   {
      //cek di database
	  //$this->CI->db->from('USER');
	  $this->CI->db->from('USER_');
	  $this->CI->db->where('USERNAME', $username);
	  $this->CI->db->where('PASSWORD', md5($password));
	  $result = $this->CI->db->get();
	  
	  if($result->num_rows() == 0)
	     return false;  //Username dan password tsb tidak ada
	  else
	  {
		 //setcookie("nama", $username, 0, '/', ".local.com");
		 
	     $userdata = $result->row();
		 
	  	 $this->CI->db->from('TIPE_USER');
		 $this->CI->db->where('ID_TIPE_USER', $userdata->ID_TIPE_USER);
		 
		 $result2 = $this->CI->db->get();
		 $userdata2 = $result2->row();
		 //Mengambil informasi user dari database
		 $session_data = array(
		 	 'id_user' => $userdata->ID_USER,
			 'nid'     => $username,
			 'pass'    => $password,
			 'nama'    => $userdata->NAMA,
			 'unit'    => $userdata->KODE_DISTRIK,
			 'tipe'    => $userdata2->TIPE_USER,
			 'level'   => $userdata->ID_TIPE_USER
		 );
		 
		 //Membuat session
		 $this->CI->session->set_userdata($session_data);

		 return true;
	  } //End of else
   }
   //End of function do_login
   
   //Untuk mengecek apakah user sudah login/belum
   function is_logged_in()
   {
      if($this->CI->session->userdata('nid') == '')
	    return false;
		
	  return true;
   }
   //End of function is_logged_in
   
   //Untuk validasi di setiap halaman yang mengharuskan autentifikasi
   function restrict()
   {
      if($this->is_logged_in() == false)
	    redirect('home/login');
   }
   //End of function restrict
   
   //Untuk mengecek menu
   function check_menu($idmenu)
   {
      $this->CI->load->model('usermodel');
	  $status_user = $this->CI->session->userdata('level');
      $allowed_level = $this->CI->usermodel->get_array_menu($idmenu);
      
      if(!in_array($status_user, $allowed_level))	 
        die("Maaf, Anda tidak berhak untuk mengakses halaman ini.");	  
   }
   
   //Untuk logout
   function do_logout()
   {
     $this->CI->session->sess_destroy();
   }
   //End of function do_logout

}
//End of class Auth

/**
  End of file auth.php
  Location: ./applicaton/libraries/auth.php
*/