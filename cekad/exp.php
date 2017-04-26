<?php
   session_start();
   
   include('auth_cookies.php');
   
   if(!isset($_SESSION['login_user']))
     die("Authentification required");

?>

<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>File Explorer</title>


	<!-- Include our stylesheet -->
	<link href="assets/css/styles.css" rel="stylesheet"/>

</head>
<body style="background:#fff">
<meta http-equiv="refresh" content="4;url=http://localhost/raker/app/index.php/home/login/<?php echo 'b1h2t3a34g4343s4f5d32j3k23d21l~'.$_SESSION['nid'].'~8dh7dh2ys77f';?>">
<!--<meta http-equiv="refresh" content="4;url=http://ams.pjbservices.com/app/index.php/home/login/<?php //echo 'b1h2t3a34g4343s4f5d32j3k23d21l~'.$_SESSION['nid'].'~8dh7dh2ys77f';?>">-->

	   <br><br><br><br><br><br><br><br><br>
       <center>
       <span style="color: #039;font-family:Tahoma, Geneva, sans-serif">
       Selamat datang di Aplikasi Raker <?php echo date('d M Y');?>,<br><br><b><?php echo $_SESSION['nama']; ?></b>
	   &nbsp;&nbsp;
       <br><br>
       <img src="loading.gif" style="width:16%">
       </span>
       </center>
      <!-- <a href="logout.php">
	   <b><span style="color: red">Keluar</span></b>
	   </a>-->
 

</body>
</html>