<?php
include('login.php'); // Includes Login Script
//include ('auth.php');

if(isset($_SESSION['login_user'])){
  header("location: exp.php"); 
}

//------------------------------------------

?>
