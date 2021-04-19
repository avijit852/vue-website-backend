<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title><?= $title; ?></title>
	<meta name="description" content="Hound is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Hound Admin, Houndadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<!-- <link rel="shortcut icon" href="<?= base_url() ?>dist/img/favicon.png">
	<link rel="icon" href="<?= base_url() ?>dist/img/favicon.png" type="image/x-icon"> -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- Morris Charts CSS -->
    <link href="<?= base_url() ?>vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>
	
	<!-- Data table CSS -->
	<link href="<?= base_url() ?>vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<link href="<?= base_url() ?>vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
	<!-- vector map CSS -->
	<link href="<?= site_url(); ?>vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?= site_url(); ?>vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css"/>
	
	<!-- select2 -->
	<!--<link href="<?= site_url(); ?>vendors/bower_components/select2/dist/css/select2.css" rel="stylesheet" type="text/css"/>-->
	<link href="<?= site_url(); ?>vendors/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- md time picker -->
	<link href="<?= site_url(); ?>vendors/bower_components/mdtimepicker/mdtimepicker.css" rel="stylesheet" type="text/css"/>
	<link href="<?= site_url(); ?>vendors/bower_components/mdtimepicker/mdtimepicker.min.css" rel="stylesheet" type="text/css"/>

	<link rel="stylesheet" href="<?= site_url(); ?>vendors/bower_components/summernote/dist/summernote.css" />
	
	<!--<link href="<?= base_url() ?>dist/switch/css/on-off-switch.css" rel="stylesheet" type="text/css">-->

	<!-- Custom CSS -->
	<link href="<?= base_url() ?>dist/css/style2.css" rel="stylesheet" type="text/css">



	<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
	
	<!--<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>-->
    <!--<script src="<?= base_url() ?>dist/switch/js/on-off-switch.js"></script>-->
    <!--<script src="<?= base_url() ?>dist/switch/js/on-off-switch-onload.js"></script>-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.8.9/jquery.timepicker.min.css" />
    <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">-->


    <style type="text/css">
    	form .error {
		  color: #bf0000;
		}
    </style>
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-1-active pimary-color-red box-layout">
		
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="<?= base_url('dashboard') ?>">
							<span 
								class="logoname" 
								style="
								font-weight: 
								900;font-size: 13px;
								">CWD</span>
							<img class="brand-img logo_img" src="<?php echo base_url();?>dist/img/logo/cwd_logo.png" alt="brand"/ style="width: 100px; height: auto">
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
				
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<!-- <li>
						<a id="open_right_sidebar" href="#"><i class="zmdi zmdi-settings top-nav-icon"></i></a>
					</li> -->
					
					<li class="dropdown auth-drp">

						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">
							<i class="zmdi zmdi-settings top-nav-icon"></i>
							<!-- <img src="dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/>
							<span class="user-online-status"></span> -->
						</a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
							</li>
							<li>
								<a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
							</li>
							<li class="divider"></li>
							<li class="sub-menu show-on-hover">
								<a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
								<ul class="dropdown-menu open-left-side">
									<li>
										<a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
									</li>
								</ul>	
							</li>
							<li class="divider"></li>
							<li>
								<a href="<?php echo base_url('auth/logout'); ?>"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->

		<!-- ========== Left Sidebar Start ========== -->
        <?php
            $this->load->view('inc/left_sidebar_view');
        ?>
        <!-- ========== Left Sidebar End ========== -->
        
        