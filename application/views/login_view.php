<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title><?php echo $title; ?></title>
		<meta name="description" content="Hound is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Hound Admin, Houndadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		<link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<!-- Custom CSS -->
        <link href="dist/css/style2.css" rel="stylesheet" type="text/css">
        
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper error-page pa-0">
			<!--<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="dist/img/logo.png" alt="brand"/>
						<span class="brand-text">Hound</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<a class="inline-block btn btn-info btn-rounded btn-outline nonecase-font" href="index.html">Back to Home</a>
				</div>
				<div class="clearfix"></div>
			</header>-->
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 error-bg-img">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<div class="wrapper-page">
                                            	<div class="panel panel-default card-view">
                                                    <div class="panel-heading"> 
                                                        <h3 class="text-center">
                                                            <!-- <strong class="text-custom">BEC</strong> -->
                                                            <img class="brand-img" style="height: 100px; width: 250px; margin-bottom: -50px;" src="<?php echo base_url();?>dist/img/logo/cwd_logo.png" alt="brand"/>
                                                        </h3>
                                                        &emsp;
                                                    </div> 
                                        
                                                    <div id="login_error" class="text-center"></div>
                                                    <div class="panel-body">
                                                    <form class="form-horizontal m-t-20 form_login" method="POST" action="<?php echo base_url('auth/validation');?>">
                                                        
                                                        <div class="form-group ">
                                                            <div class="col-xs-12">
                                                                <input class="form-control" type="text" name="email" id="login_id" placeholder="Email Id">
                                                            </div>
                                                        </div>
                                        
                                                        <div class="form-group">
                                                            <div class="col-xs-12">
                                                                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group text-center" style="padding-bottom: 13px;">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-block btn-danger text-uppercase waves-effect waves-dark login" type="submit">Log In</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-t-30 m-b-0">
                                                            <div class="col-sm-12">
                                                                <a href="<?= base_url('forgetpassword'); ?>" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>   
                                                </div>
                                            </div>
										</div>	
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
		<script type="text/javascript">
           $(document).ready(function () 
           {

               $('div#login_error').hide();
               $('form.form_login').submit(function (e) 
               {
                   
                   e.preventDefault();
                   $('.login').prop('disabled', true);
                   $('.login').text('Loading');
                   var url = $(this).attr('action');
                   var postData = $(this).serialize();
                   $.post(url, postData, function (o) 
                   {
                       if (o.result == 1) 
                       {
                           $('div#login_error').show().removeClass('text-danger').addClass('text-success').text('Successfully Logged In');
                           $('div.modal-demo').hide();
                           //$('div#reg_success').show().text('User Successfully Registered');
                        //   $.Notification.autoHideNotify('success', 'top right', 'Logged in Successfully');
                        //   $('div.notifyjs-corner').css('z-index', '10050');
                           window.setTimeout(function ()
                           {
                                window.location.href="<?= site_url('dashboard'); ?>";
                           }, 1000);
                       }
                       /*else if(o.result == 2){
                           $('div#update_error').hide();
                           $('div.modal-demo').hide();
                           $.Notification.autoHideNotify('error', 'top right', 'Non-existing User');
                           $('div.notifyjs-corner').css('z-index', '10050');
                           window.setTimeout(function ()
                           {
                                window.location.href='<?= site_url('login'); ?>';
                           }, 1000);
                       }*/
                       else{
                            $('.login').prop('disabled', false);
                            $('.login').text('Log In');
                            $('div#login_error').show().removeClass('text-success').addClass('text-danger').text('Invalid Email or Password');
                       }
                   }, 'json');
               });
           });
        </script>
        
	</body>
</html>
