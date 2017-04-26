<?php
session_start();

//-----------------------------
session_unset();
session_destroy();
	  
$cookie_name = hash('sha256', $_SERVER['REMOTE_ADDR']);
setcookie($cookie_name, null, time()-100 , '/', '.pjbservices.com');
//-----------------------------

//if(session_destroy()) // Destroying All Sessions
  header("Location: ../app"); // Redirecting To Home Page

?>