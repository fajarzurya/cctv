<?php 

  if(!defined('BASEPATH'))
     exit('No direct script access allowed');
	 
  /**
     Class Usermodel
	 @author IT-PJBS
  */
  
  class Usermodel extends CI_Model
  {
     public function get_menu_for_level($user_level)
	 {
	   $this->db->from('MENU');
	   $this->db->like('MENU_AKSES','+'.$user_level.'+');
	   $result = $this->db->get();
	   
	   return $result;
	 }
	 
	 function get_array_menu($id)
	 {
	    $this->db->select('MENU_AKSES');
		$this->db->from('MENU');
		$this->db->where('MENU_ID', $id);
		$data = $this->db->get();
		
		if($data->num_rows() > 0)
		{
		   $row = $data->row();
		   $level = $row->MENU_AKSES;
		   $arr = explode('+', $level);
		   
		   return $arr;
		} //End of if
		else
		  die();
	 }
	
  }
  //End of class Usermodel
  
 