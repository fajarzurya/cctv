<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/texteditor/lib/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/texteditor/src/bootstrap-wysihtml5.css" />
    <script src="<?php echo base_url(); ?>assets/texteditor/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="<?php echo base_url(); ?>assets/texteditor/lib/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/texteditor/lib/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/texteditor/src/bootstrap3-wysihtml5.js"></script>
    <script src="<?php echo base_url(); ?>assets/gantchart/js/jquery.fn.gantt.js"></script>
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/flat/blue.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">    
    
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	<!-- DataTables CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
	
	<!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome-new/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery -->
	<!-- datepicker-->
    <link type="text/css" href="<?php echo base_url(); ?>assets/datepicker/css/ui.all.css" rel="stylesheet" />
    <link type="text/css" href="<?php echo base_url(); ?>assets/datepicker/css/jquery-ui.theme.min.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/datepicker/js/ui.datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
	<!-- jvectormap -->
	<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url(); ?>assets/plugins/knob/jquery.knob.js"></script>
	<!-- daterangepicker -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- datepicker -->
	<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<!-- Slimscroll -->
	<script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>

	<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker();
		$("#format").change(function() { $('#datepicker').datepicker('option', {dateFormat: $(this).val()}); });
	});
	$(function() {
		$("#datepicker2").datepicker();
		$("#format2").change(function() { $('#datepicker2').datepicker('option', {dateFormat: $(this).val()}); });
	});
	</script>
    <!--datepicker-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    textarea{
		min-height:200px;
		}
    </style>

</head>

<body class="hold-transition sidebar-mini">
	<script src="<?php echo base_url(); ?>assets/highchart/highcharts.js"></script>
    <script src="<?php echo base_url(); ?>assets/highchart/highcharts-more.js"></script>
	<script src="<?php echo base_url(); ?>assets/highchart/modules/exporting.js"></script>
	<!-- Header -->
	<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>assets/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>GaTTCO</b>CCTV </span>
    </a>
	<!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
	
    <div id="wrapper" >

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;position:relative;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" style="margin:5px;margin-right:25px;margin-top:15px;">
            	<li class="dropdown" style="font-size:11px;">
                
                </li>
                
                <li class="dropdown">
                	<?php echo anchor('home/logout', '<i class="fa fa-user fa-fw"></i> Logout ');?>
                </li>
                <!-- /.dropdown -->
                
            </ul>
            <!-- /.navbar-top-links -->

			
			
			<!-- Sidebar ---------------------------------------------------------------------------------------------------------------->
			
            <div class="navbar-default sidebar" role="navigation" style="margin-top:100px">
                <div class="sidebar-nav navbar-collapse" >
                    <ul class="nav" id="side-menu" style="margin-top:-5px">
                       
                        <li>
                            <!--<a href="home/skp"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>-->
							<?php
							   echo anchor('home', '<i class="fa fa-dashboard fa-fw"></i> Dashboard');
							   $id_tipe_user = $this->session->userdata('level');
							   
							   if($id_tipe_user==1){
								   $k31 = '';
								   $k32 = '';
								   $k33 ='';
								   $l31 = '';
								   $l32 = '';
								   $l33 ='';
								   $n31 = '';
								   $n32 = '';
								   $n33 ='';
								   }
							   else if($id_tipe_user==2 or $id_tipe_user==3 or $id_tipe_user==4){
								   $k31 = '';
								   $k32 = '';
								   $k33 ='';
								   $l31 = '';
								   $l32 = '';
								   $l33 ='';
								   $n31 = '';
								   $n32 = '';
								   $n33 ='';
								   }
								 else if($id_tipe_user==5){
								   $k31 = 'display:none';
								   $k32 = 'display:none';
								   $k33 = 'display:none';
								   $l31 = 'display:none';
								   $l32 = 'display:none';
								   $l33 = 'display:none';
								   $n31 = 'display:none';
								   $n32 = 'display:none';
								   $n33 = 'display:none';
								   }
								  else {
								   $k31 = 'display:none';
								   $k32 = 'display:none';
								   $k33 = 'display:none';
								   $l31 = 'display:none';
								   $l32 = 'display:none';
								   $l33 = 'display:none';
								   $n31 = 'display:none';
								   $n32 = 'display:none';
								   $n33 = 'display:none';
								   redirect('home/logout');
								   }
							?>
                        </li>
                       
                       
                        <li>
                            <a href="#"><i class="fa fa-database fa-fw"></i> Master Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li style=" <?php echo $k31;?> ">
									<!--<a href="flot.html">Flot Charts</a>-->
									<?php
									   echo anchor('customer/detail_cust/','<i class="fa fa-users fa-fw"></i> Customer');
									   echo anchor('employee/detail_em/','<i class="fa fa-address-card fa-fw"></i> Employee');
									   echo anchor('inventory/detail_inv/','<i class="fa fa-cubes fa-fw"></i> Inventory');
									   echo anchor('item/detail_item/','<i class="fa fa-video-camera fa-fw"></i> Item Master');
									   echo anchor('price/detail_price/','<i class="fa fa-usd fa-fw"></i> Price');
									   //echo anchor('storeroom/detail_strm/','<i class="fa fa-archive fa-fw"></i> Storeroom');
									   echo anchor('user/detail_user/','<i class="fa fa-universal-access fa-fw"></i> User');
									?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-handshake-o fa-fw"></i> Transaction<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li style=" <?php echo $k32;?> ">
									<!--<a href="flot.html">Flot Charts</a>-->
									<?php
									   echo anchor('pr/detail_pr/','<i class="fa fa-exchange fa-fw"></i> Purchase Request');
									   echo anchor('po/detail_po/','<i class="fa fa-shopping-cart fa-fw"></i> Purchase Order');
									?>
                                </li>
                            </ul>
							<ul class="nav nav-second-level">
								<li style=" <?php echo $k33;?> ">
									<!--<a href="flot.html">Flot Charts</a>-->
									<?php
									   echo anchor('dismantle/detail_dis/','<i class="fa fa-random fa-fw"></i> Dismantle');
									   echo anchor('install/detail_ins/','<i class="fa fa-upload fa-fw"></i> Installation Request');
									   echo anchor('maintenance/detail_mtnc/','<i class="fa fa-wrench fa-fw"></i> Maintenance');
									?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
			
			<!-- Sidebar ------------------------------------------------------------------------------------------------------------------>
			
			
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">
					<?php echo $title; ?>
					</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
<!------------------------------------------------------------------------------------------------------------------------------>				
			<?php
			
				echo $contents;
			?><!------------------------------------------------------------------------------------------------------------------------------>	
        
		</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap Core JavaScript -->
   
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
    
    <!--Ganttchart-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/gantchart/css/style.css" />
    
    <script>
		$('.textarea').wysihtml5();
	</script>
	
	<script type="text/javascript" charset="utf-8">
		$(prettyPrint);
	</script>
    
    
        
    
    