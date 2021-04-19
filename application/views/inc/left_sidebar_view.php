Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">

			    <li>
					<a href="<?= base_url('dashboard') ?>" id="dashboard">
					    <div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div>
					    <div class="clearfix"></div>
				    </a>
				</li>

				<li>
					<a href="#" id="pages" data-toggle="collapse" data-target="#pagesTarget">
						<div class="pull-left"><i class="zmdi zmdi-balance mr-20"></i><span class="right-nav-text">Pages</span></div>
						<div class="pull-right"><i class="zmdi zmdi-caret-down" aria-hidden="true"></i></div>
						<div class="clearfix"></div>
					</a>
					<ul id="pagesTarget" class="collapse collapse-level-1">
					    
						<li>
	        				<a href="<?=  base_url('page') ?>" id="addPages">
	        					<div class="pull-left"><i class="zmdi zmdi-plus mr-10"></i><span class="right-nav-text">Add New Pages</span></div>
	        					<div class="clearfix"></div>
	        				</a>
	        			</li>
	            			
						<li>
	        				<a href="<?= base_url('page/pagedetails') ?>" id="detailsPage">
	        					<div class="pull-left"><i class="zmdi zmdi-view-list mr-10"></i><span class="right-nav-text">Add Pages Details</span></div>
	        					<div class="clearfix"></div>
	        				</a>
	        			</li>
					</ul>
				</li>


				<li>
					<a href="#" id="slider" data-toggle="collapse" data-target="#sliderTarget">
						<div class="pull-left"><i class="zmdi zmdi-view-day mr-20"></i><span class="right-nav-text">Slider</span></div>
						<div class="pull-right"><i class="zmdi zmdi-caret-down" aria-hidden="true"></i></div>
						<div class="clearfix"></div>
					</a>
					<ul id="sliderTarget" class="collapse collapse-level-1">

						<li>
							<a href="<?php echo  base_url('slider') ?>" id="newslider">
								<div class="pull-left"><i class="zmdi zmdi-plus mr-10"></i><span class="right-nav-text">Slider</span></div>
								<div class="clearfix"></div>
							</a>
						</li>

						<li>
							<a href="<?php echo  base_url('slider/draganddrop') ?>" id="sliderPosition">
								<div class="pull-left"><i class="zmdi zmdi-view-list mr-10"></i><span class="right-nav-text">Slider Position</span></div>
								<div class="clearfix"></div>
							</a>
						</li>
					    
					</ul>
				</li>



				


				<li>
    				<a href="<?php echo  base_url('service') ?>" id="service">
    					<div class="pull-left"><i class="zmdi zmdi-library mr-20"></i><span class="right-nav-text">Service</span></div>
    					<div class="clearfix"></div>
    				</a>
    			</li>

    			<li>
    				<a href="<?php echo  base_url('portfolio') ?>" id="portfolio">
    					<div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">Portfolio</span></div>
    					<div class="clearfix"></div>
    				</a>
    			</li>

    			<li>
    				<a href="<?php echo  base_url('blogs') ?>" id="blogs">
    					<div class="pull-left"><i class="zmdi zmdi-balance-wallet mr-20"></i><span class="right-nav-text">Blogs</span></div>
    					<div class="clearfix"></div>
    				</a>
    			</li>


    			<li>
    				<a href="<?php echo  base_url('query') ?>" id="query">
    					<div class="pull-left"><i class="zmdi zmdi-info mr-20"></i><span class="right-nav-text">Query List</span></div>
    					<div class="clearfix"></div>
    				</a>
    			</li>


    			<li>
    				<a href="<?php echo  base_url('contact') ?>" id="contact">
    					<div class="pull-left"><i class="zmdi zmdi-info mr-20"></i><span class="right-nav-text">Contact List</span></div>
    					<div class="clearfix"></div>
    				</a>
    			</li>


				<!-- <li>
					<a href="#" id="service_detail" data-toggle="collapse" data-target="#service_details">
						<div class="pull-left"><i class="zmdi zmdi-balance mr-20"></i><span class="right-nav-text">Service</span></div>
						<div class="pull-right"><i class="zmdi zmdi-caret-down" aria-hidden="true"></i></div>
						<div class="clearfix"></div>
					</a>
					<ul id="service_details" class="collapse collapse-level-1">
					    
						<li>
	        				<a href="<?php //echo  base_url('service') ?>" id="service">
	        					<div class="pull-left"><i class="zmdi zmdi-plus mr-10"></i><span class="right-nav-text">Create Service</span></div>
	        					<div class="clearfix"></div>
	        				</a>
	        			</li>
	            			
						<li>
	        				<a href="<?php  //base_url('service/listing') ?>" id="service_listing">
	        					<div class="pull-left"><i class="zmdi zmdi-view-list mr-10"></i><span class="right-nav-text">Listing Service</span></div>
	        					<div class="clearfix"></div>
	        				</a>
	        			</li>
					</ul>
				</li> -->

				<!-- <li>
					<a href="<?//= base_url('service') ?>" id="dailytimesheet">
					    <div class="pull-left"><i class="zmdi zmdi-receipt mr-20"></i><span class="right-nav-text">Time List History</span></div>
					    <div class="clearfix"></div>
				    </a>
				</li> -->



				<!-- <li>
					<a href="#" id="company_detail" data-toggle="collapse" data-target="#company_details">
						<div class="pull-left"><i class="zmdi zmdi-balance mr-20"></i><span class="right-nav-text">Company</span></div>
						<div class="pull-right"><i class="zmdi zmdi-caret-down" aria-hidden="true"></i></div>
						<div class="clearfix"></div>
					</a>
					<ul id="company_details" class="collapse collapse-level-1">
					    
						<li>
	        				<a href="<?php // base_url('company') ?>" id="company">
	        					<div class="pull-left"><i class="zmdi zmdi-plus mr-10"></i><span class="right-nav-text">Create Company</span></div>
	        					<div class="clearfix"></div>
	        				</a>
	        			</li>
	            			
						<li>
	        				<a href="<?php // base_url('company/listing') ?>" id="company_listing">
	        					<div class="pull-left"><i class="zmdi zmdi-view-list mr-10"></i><span class="right-nav-text">Listing Company</span></div>
	        					<div class="clearfix"></div>
	        				</a>
	        			</li>
					</ul>
				</li> -->
				

				


				


			</ul>
		</div>
		<!-- /Left Sidebar Menu