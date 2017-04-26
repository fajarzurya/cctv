<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script access allowed');
?>

<html>
   <head>
   <title> <?php echo $title; ?> </title>

   <link href="<?php echo base_url();?>asset/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">

   <link href="<?php echo base_url();?>asset/css/btnx.css" rel="stylesheet" media="screen print">

   <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet" media="screen print">

   </head>
   
   <body >
         <!-------------------------------------------------------------------------------------------------------------->
		 
         <!-- Content -->
	     <div id="content">
		 	<?php echo $contents; ?>
         </div>  
         <!-- End div Content -->
   </body>
   
   
</html>

