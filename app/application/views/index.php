<?php
   
   if(!defined('BASEPATH'))
     exit('No direct script access allowed');
?>

<html>
   <head>
   <title>Selamat Datang</title>
   
   <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	<!-- DataTables CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/timeline.css" rel="stylesheet">
	
	<!-- Animated CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/animate.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery -->
    <!--<script src="<?php //echo base_url();?>assets/datepicker/js/jquery.min.js"></script>-->
        
    
    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script> 
    
    <script src="<?php echo base_url();?>assets/datepicker/bootstrap-datepicker.js"></script>
    <link href="<?php echo base_url();?>assets/datepicker/datepicker.css" rel="stylesheet" />
    <script type="text/javascript">

	$(document).ready(function(){
		$("#datepicker").datepicker({
				format : "dd/mm/yyyy"
			});
		});
	</script>
	<style>
    .loginsalah{
		background:#F90;
		color:#FFF;
		text-align:center;
		padding:5px;
		font-size:12px;
		font-family:Tahoma, Geneva, sans-serif;
		z-index:1000;
		}
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
   </head>
 <body>
 <div class="navbar-default sidebar" role="navigation" style="margin-top:50px;float:left;position:relative;z-index:1000">
   <div class="sidebar-nav navbar-collapse" >
   
    <div class="container" style="backgroud:#000">
        <div class="row" >
            <div class="col-md-8 col-md-offset-3" >
            		
				<div class="col-lg-5">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <img src="<?php echo base_url(); ?>assets/images/POAK.jpg" style="width:100%;">
                        </div>
						<!--<div class="panel-heading">
                            <a href="<?php //echo base_url(); ?>assets/images/POAK.pdf" target="_blank">
							Preview
							</a>
                        </div>-->
                        <!-- /.panel-body -->
                    </div>
					
                    <!-- /.panel -->
                </div>
                
                <div class="col-lg-5 ">
                <!--<div class="login-panel panel panel-default">-->
				<div class="middle-box text-center loginscreen animated fadeInLeft login-panel panel panel-default">
                    <div class="panel-heading" style="background:#069;color:#FFF">
                        <h3 class="panel-title">Login Project CCTV</h3>
                    </div>
                    <div class="panel-body">
                       
					   <?php echo form_open('home/login');?>
					   <!--<form action="http://ams.pjbservices.com/cekad/index.php" method="post">-->
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User" name="username" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                               <input class="btn btn-primary btn-sm" name="submit" type="submit" value="Login" style="background:#069">
                            </fieldset>
                            <?php
							//if(($notif == 0)){
							//	echo '';
							//	}
							//else{
                            //	echo "<br><div class='alert alert-danger'>Maaf, username dan password salah !, Reset password Hubungi <a href='http://helpdesk.pjbservices.com' target='_blank'>Helpdesk IT</a></div>";
							//	}
							?>
                        </form>
                    </div>
                </div>  
            	</div>
					
             </div>   
        </div>
    </div>
    

  </div>  
  </div>



</body>
   
</html>
<!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>	
	
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    
	<!-- Morris Charts JavaScript -->
	<!--
	<script src="<?php //echo base_url(); ?>assets/bower_components/raphael/raphael-min.js"></script>
	<script src="<?php //echo base_url(); ?>assets/bower_components/morrisjs/morris.min.js"></script>
	-->
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>
    