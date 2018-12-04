<?php 
    include './lib/Include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>JobPress HTML template</title>
		<!-- CSS -->
		<!-- Bootstrap -->
		<link href="<?php echo ASSET_URL;?>assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Ionicons -->
		<link href="<?php echo ASSET_URL;?>assets/fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="<?php echo ASSET_URL;?>assets/css/owl.carousel.css" rel="stylesheet">
		<link href="<?php echo ASSET_URL;?>assets/css/owl.theme.default.css" rel="stylesheet">
		<!-- Animate.css -->
		<link href="<?php echo ASSET_URL;?>assets/css/animate.min.css" rel="stylesheet">
		<!--Magnific Popup -->
		<link href="<?php echo ASSET_URL;?>assets/css/magnific-popup.css" rel="stylesheet">
		<!--Tagsinput CSS -->
		<link href="<?php echo ASSET_URL;?>assets/css/tagsinput.css" rel="stylesheet">		
		<!-- Style.css -->
		<link href="<?php echo ASSET_URL;?>assets/css/style.css" rel="stylesheet">
	</head>
	<body>
		<!-- Header -->
		<header class="header">
			<div class="container clearfix">
				<div class="header-inner has-form flex space-between items-center">
					<div class="left flex items-center no-column no-wrap">
						<div class="logo"><a href="index.html"><img src="<?php echo ASSET_URL;?>assets/images/logo.png" alt="JobPress" class="img-responsive"></a></div>	
						<div class="job-search-form form-header">						
							<form class="form-inline flex no-column no-wrap">
								<div class="form-group">
									<div class="form-group-inner">
										<input type="text" class="form-control" id="input-field-1" placeholder="Keywords">
										<i class="ion-ios-briefcase-outline"></i>
									</div> <!-- end .form-group-inner -->
								</div> <!-- end .form-group-inner -->
								<div class="form-group">
									<div class="form-group-inner">
										<input type="text" class="form-control" id="input-field-2" placeholder="location">
										<i class="ion-ios-location-outline"></i>
									</div> <!-- end .form-group-inner -->
								</div> <!-- end .form-group -->
								<button type="submit" class="button"><i class="ion-ios-search-strong"></i></button>
							</form>
						</div> <!-- end .job-search-form -->
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation" style="visibility:hidden;">
							<nav class="main-nav">
								<ul class="list-unstyled">
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="index.html">Home</a></li>
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="account-info-top flex items-center no-column">
							<a href="#0" class="profile-button flex space-between items-center no-column no-wrap">
								<span>Hi! </span> John Mark 
								<img src="<?php echo ASSET_URL;?>assets/images/avatar/j.png" alt="avatar" class="img-responsive">
							</a>
						</div> <!-- end .account-info-top -->
					</div> <!-- end .right -->
				</div> <!-- end .header-inner -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->

		<!-- Responsive Menu -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<!-- Candidate Dashboard -->
		<div class="section candidate-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="candidate-dashboard-wrapper flex space-between no-wrap">

						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">
								<li class="heading">Manage account</li>
							    <li class="active"><a data-toggle="pill" href="#resume">My Resume</a></li>
							    <li><a data-toggle="pill" href="#bookmarked-jobs">Bookmarked Jobs</a></li>
							    <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications">Notifications</a> <span class="notification-count">2</span></li>
							    <li class="nav-divider"></li>
							   	<li class="heading">Manage job</li>
								<li><a data-toggle="pill" href="#manage-applications">Manage Applications</a></li>
							    <li><a data-toggle="pill" href="#job-alerts">Job Alerts</a></li>
							    <li class="nav-divider"></li>
							    <li><a data-toggle="pill" href="#change-password">Change Password</a></li>
							    <li><a data-toggle="pill" href="#signout">Sign Out</a></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">
							<div class="tab-content candidate-dashboard">

							    <div id="bookmarked-jobs" class="tab-pane">
							        <h3 class="tab-pane-title">Bookmarked jobs</h3>
							        <div class="bookmarked-jobs-list-wrapper">
							        	<div class="bookmarked-job-wrapper">
							        		<div class="bookmarked-job flex no-wrap no-column ">
								        		<div class="job-company-icon">
								        			<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
								        		</div> <!-- end .job-icon -->
								        		<div class="bookmarked-job-info">
								        			<h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
								        			<h5>Banana inc.</h5>
								        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
								        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
								        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
									        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
								        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
								        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
								        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
								        					</ul> <!-- end .candidates-avatar -->
															<h6 class="bookmarked-job-category">Art/Design</h6>
								        					<h6 class="candidate-location">Park ave,<span>nyc, usa</span></h6>
															<h6 class="hourly-rate">$45<span>/Hour</span></h6>
								        				</div> <!-- end .bookmarked-job-meta -->
								        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
								        					<i class="ion-ios-heart wishlist-icon"></i>
								        					<a href="#0" class="button">more detail</a>
								        				</div> <!-- end .right-side-bookmarked-job-meta -->
								        			</div> <!-- end .bookmarked-job-info-bottom -->
								        		</div> <!-- end .bookmarked-job-info -->
							        		</div> <!-- end .bookmarked-job -->
							        	</div> <!-- end .bookmarked-job-wrapper --> 

							        	<div class="bookmarked-job-wrapper">
							        		<div class="bookmarked-job flex no-wrap no-column ">
								        		<div class="job-company-icon">
								        			<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big02.jpg" alt="company-icon" class="img-responsive">
								        		</div> <!-- end .job-icon -->
								        		<div class="bookmarked-job-info">
								        			<h4 class="dark flex no-column">We're looking for a designer<a href="#0" class="button full-time">full time</a></h4>
								        			<h5>Cat studio</h5>
								        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
								        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
								        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
									        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
								        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
								        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
								        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
								        					</ul> <!-- end .candidates-avatar -->
															<h6 class="bookmarked-job-category">Art/Design</h6>
								        					<h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
															<h6 class="hourly-rate">$45<span>/Hour</span></h6>
								        				</div> <!-- end .bookmarked-job-meta -->
								        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
								        					<i class="ion-ios-heart wishlist-icon"></i>
								        					<a href="#0" class="button">more detail</a>
								        				</div> <!-- end .right-side-bookmarked-job-meta -->
								        			</div> <!-- end .bookmarked-job-info-bottom -->
								        		</div> <!-- end .bookmarked-job-info -->
							        		</div> <!-- end .bookmarked-job -->
							        	</div> <!-- end .bookmarked-job-wrapper --> 

							        	<div class="bookmarked-job-wrapper">
							        		<div class="bookmarked-job flex no-wrap no-column ">
								        		<div class="job-company-icon">
								        			<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big03.jpg" alt="company-icon" class="img-responsive">
								        		</div> <!-- end .job-icon -->
								        		<div class="bookmarked-job-info">
								        			<h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
								        			<h5>Bull creative angency</h5>
								        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
								        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
								        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
									        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
								        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
								        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
								        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
								        					</ul> <!-- end .candidates-avatar -->
															<h6 class="bookmarked-job-category">Art/Design</h6>
								        					<h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
															<h6 class="hourly-rate">$45<span>/Hour</span></h6>
								        				</div> <!-- end .bookmarked-job-meta -->
								        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
								        					<i class="ion-ios-heart wishlist-icon"></i>
								        					<a href="#0" class="button">more detail</a>
								        				</div> <!-- end .right-side-bookmarked-job-meta -->
								        			</div> <!-- end .bookmarked-job-info-bottom -->
								        		</div> <!-- end .bookmarked-job-info -->
							        		</div> <!-- end .bookmarked-job -->
							        	</div> <!-- end .bookmarked-job-wrapper --> 

							        	<div class="bookmarked-job-wrapper">
							        		<div class="bookmarked-job flex no-wrap no-column ">
								        		<div class="job-company-icon">
								        			<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big04.jpg" alt="company-icon" class="img-responsive">
								        		</div> <!-- end .job-icon -->
								        		<div class="bookmarked-job-info">
								        			<h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
								        			<h5>Elephant studio</h5>
								        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
								        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
								        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
									        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
								        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
								        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
								        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
								        					</ul> <!-- end .candidates-avatar -->
															<h6 class="bookmarked-job-category">Art/Design</h6>
								        					<h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
															<h6 class="hourly-rate">$45<span>/Hour</span></h6>
								        				</div> <!-- end .bookmarked-job-meta -->
								        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
								        					<i class="ion-ios-heart wishlist-icon"></i>
								        					<a href="#0" class="button">more detail</a>
								        				</div> <!-- end .right-side-bookmarked-job-meta -->
								        			</div> <!-- end .bookmarked-job-info-bottom -->
								        		</div> <!-- end .bookmarked-job-info -->
							        		</div> <!-- end .bookmarked-job -->
							        	</div> <!-- end .bookmarked-job-wrapper --> 

							        	<div class="bookmarked-job-wrapper">
							        		<div class="bookmarked-job flex no-wrap no-column ">
								        		<div class="job-company-icon">
								        			<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big04.jpg" alt="company-icon" class="img-responsive">
								        		</div> <!-- end .job-icon -->
								        		<div class="bookmarked-job-info">
								        			<h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
								        			<h5>Banana inc.</h5>
								        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
								        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
								        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
									        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
								        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
								        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
								        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
								        					</ul> <!-- end .candidates-avatar -->
															<h6 class="bookmarked-job-category">Art/Design</h6>
								        					<h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
															<h6 class="hourly-rate">$45<span>/Hour</span></h6>
								        				</div> <!-- end .bookmarked-job-meta -->
								        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
								        					<i class="ion-ios-heart wishlist-icon"></i>
								        					<a href="#0" class="button">more detail</a>
								        				</div> <!-- end .right-side-bookmarked-job-meta -->
								        			</div> <!-- end .bookmarked-job-info-bottom -->
								        		</div> <!-- end .bookmarked-job-info -->
							        		</div> <!-- end .bookmarked-job -->
							        	</div> <!-- end .bookmarked-job-wrapper -->
						        	</div> <!-- end .bookmarked-jobs-list-wrapper -->
						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
										<ul class="list-unstyled flex no-column items-center">
											<li><a href="#0">1</a></li>
											<li><a href="#0">2</a></li>
											<li><a href="#0">3</a></li>
											<li><a href="#0">4</a></li>
											<li><a href="#0">5</a></li>									
										</ul>
										<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
									</div> <!-- end .jobpress-custom-pager -->							        
							    </div> <!-- end #bookmarked-jobs-tab -->

							    <div id="job-alerts" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Job alerts</h3>
							        <div class="job-alerts-list-wrapper">
							        	<ul class="job-alert-table-headings flex items-center no-column list-unstyled">
							        		<li class="company-name-cell"><h6>Company Name</h6></li>
							        		<li class="job-position-cell"><h6>Position</h6></li>
							        		<li class="contract-type-cell"><h6>Contract Type</h6></li>
							        		<li class="job-frequency-cell"><h6>Frequency</h6></li>
							        	</ul> <!-- end .job-alert-table-headings -->
							        	<div class="job-alerts-wrapper">											
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Banana Inc.</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>web designer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Folder cooperation</h4>
														<p><i class="ion-ios-location-outline"></i>Cupertino, CA, USA</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>UI/UX designer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Bookcover publisher</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>Front end developer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Archive inc.</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>Backend developer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Quick Studio</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>Graphic Designer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        	</div> <!-- end .job-alerts-wrapper -->
						        	</div> <!-- end .job-alerts-list-wrapper -->
						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
										<ul class="list-unstyled flex no-column items-center">
											<li><a href="#0">1</a></li>
											<li><a href="#0">2</a></li>
											<li><a href="#0">3</a></li>
											<li><a href="#0">4</a></li>
											<li><a href="#0">5</a></li>									
										</ul>
										<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
									</div> <!-- end .jobpress-custom-pager -->							        
							    </div> <!-- end #job-alerts-tab -->

							    <div id="manage-applications" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Manage applications</h3>
							        <div class="job-applications-list-wrapper">
							        	<div class="job-application flex items-center no-column no-wrap">
											<div class="application-company-cell application-cell flex items-center no-column no-wrap">
												<div class="application-company-logo">
													<img src="<?php echo ASSET_URL;?>assets/images/company-logo01.jpg" alt="company-logo" class="img-responsive">
												</div> <!-- end .application-company-logo -->
												<div class="application-company-text">
													<h4 class="dark">Web designer needed</h4>
													<p>Quick studio</p>
												</div> <!-- end .application-company-text -->
											</div> <!-- end .job-application-company-cell -->
											<div class="application-contractor-type-cell application-cell">
												<button type="button" class="button full-time button-xs">Full time</button>
											</div> <!-- end .application-contractor-type-cell -->
											<div class="application-submission-date-cell application-cell">
												<p>No 14th, 2017</p>
											</div> <!-- end .application-submission-date-cell -->
											<div class="application-status-cell">
												<p class="rejected">Rejected</p>
											</div> <!-- end .application-status-cell -->
							        	</div> <!-- end .job-application -->
							        	<div class="job-application flex items-center no-column no-wrap">
											<div class="application-company-cell application-cell flex items-center no-column no-wrap">
												<div class="application-company-logo">
													<img src="<?php echo ASSET_URL;?>assets/images/company-logo11.jpg" alt="company-logo" class="img-responsive">
												</div> <!-- end .application-company-logo -->
												<div class="application-company-text">
													<h4 class="dark">Front-end developer needed</h4>
													<p>Evotweet</p>
												</div> <!-- end .application-company-text -->
											</div> <!-- end .job-application-company-cell -->
											<div class="application-contractor-type-cell application-cell">
												<button type="button" class="button full-time button-xs">Full time</button>
											</div> <!-- end .application-contractor-type-cell -->
											<div class="application-submission-date-cell application-cell">
												<p>No 14th, 2017</p>
											</div> <!-- end .application-submission-date-cell -->
											<div class="application-status-cell">
												<p class="processing">In process</p>
											</div> <!-- end .application-status-cell -->
							        	</div> <!-- end .job-application --> 
							        	<div class="job-application flex items-center no-column no-wrap">
											<div class="application-company-cell application-cell flex items-center no-column no-wrap">
												<div class="application-company-logo">
													<img src="<?php echo ASSET_URL;?>assets/images/company-logo12.jpg" alt="company-logo" class="img-responsive">
												</div> <!-- end .application-company-logo -->
												<div class="application-company-text">
													<h4 class="dark">We're looking for an art director</h4>
													<p>Prymb creative studio</p>
												</div> <!-- end .application-company-text -->
											</div> <!-- end .job-application-company-cell -->
											<div class="application-contractor-type-cell application-cell">
												<button type="button" class="button full-time button-xs">Full time</button>
											</div> <!-- end .application-contractor-type-cell -->
											<div class="application-submission-date-cell application-cell">
												<p>No 14th, 2017</p>
											</div> <!-- end .application-submission-date-cell -->
											<div class="application-status-cell">
												<p class="approved">Approved</p>
											</div> <!-- end .application-status-cell -->
							        	</div> <!-- end .job-application -->
							        	<div class="job-application flex items-center no-column no-wrap">
											<div class="application-company-cell application-cell flex items-center no-column no-wrap">
												<div class="application-company-logo">
													<img src="<?php echo ASSET_URL;?>assets/images/company-logo08.jpg" alt="company-logo" class="img-responsive">
												</div> <!-- end .application-company-logo -->
												<div class="application-company-text">
													<h4 class="dark">Looking for a project leader</h4>
													<p>Elephant studio</p>
												</div> <!-- end .application-company-text -->
											</div> <!-- end .job-application-company-cell -->
											<div class="application-contractor-type-cell application-cell">
												<button type="button" class="button full-time button-xs">Full time</button>
											</div> <!-- end .application-contractor-type-cell -->
											<div class="application-submission-date-cell application-cell">
												<p>No 14th, 2017</p>
											</div> <!-- end .application-submission-date-cell -->
											<div class="application-status-cell">
												<p class="rejected">Rejected</p>
											</div> <!-- end .application-status-cell -->
							        	</div> <!-- end .job-application -->
							        	<div class="job-application flex items-center no-column no-wrap">
											<div class="application-company-cell application-cell flex items-center no-column no-wrap">
												<div class="application-company-logo">
													<img src="<?php echo ASSET_URL;?>assets/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
												</div> <!-- end .application-company-logo -->
												<div class="application-company-text">
													<h4 class="dark">We're hiring a fullstack developer'</h4>
													<p>Bnanan inc.</p>
												</div> <!-- end .application-company-text -->
											</div> <!-- end .job-application-company-cell -->
											<div class="application-contractor-type-cell application-cell">
												<button type="button" class="button full-time button-xs">Full time</button>
											</div> <!-- end .application-contractor-type-cell -->
											<div class="application-submission-date-cell application-cell">
												<p>No 14th, 2017</p>
											</div> <!-- end .application-submission-date-cell -->
											<div class="application-status-cell">
												<p class="processing">In process</p>
											</div> <!-- end .application-status-cell -->
							        	</div> <!-- end .job-application -->
							        	<div class="job-application flex items-center no-column no-wrap">
											<div class="application-company-cell application-cell flex items-center no-column no-wrap">
												<div class="application-company-logo">
													<img src="<?php echo ASSET_URL;?>assets/images/company-logo13.jpg" alt="company-logo" class="img-responsive">
												</div> <!-- end .application-company-logo -->
												<div class="application-company-text">
													<h4 class="dark">Web designer needed</h4>
													<p>Bull creative agency</p>
												</div> <!-- end .application-company-text -->
											</div> <!-- end .job-application-company-cell -->
											<div class="application-contractor-type-cell application-cell">
												<button type="button" class="button full-time button-xs">Full time</button>
											</div> <!-- end .application-contractor-type-cell -->
											<div class="application-submission-date-cell application-cell">
												<p>No 14th, 2017</p>
											</div> <!-- end .application-submission-date-cell -->
											<div class="application-status-cell">
												<p class="rejected">Rejected</p>
											</div> <!-- end .application-status-cell -->
							        	</div> <!-- end .job-application -->
							        </div> <!-- end .applications-list-wrapper -->
						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
										<ul class="list-unstyled flex no-column items-center">
											<li><a href="#0">1</a></li>
											<li><a href="#0">2</a></li>
											<li><a href="#0">3</a></li>
											<li><a href="#0">4</a></li>
											<li><a href="#0">5</a></li>									
										</ul>
										<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
									</div> <!-- end .jobpress-custom-pager -->							        
							    </div> <!-- end #manage-applications-tab -->

							    <div id="notifications" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Your notifications</h3>
							        <div class="notifications-list-wrapper">

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>has expired.</p>
												<p class="ultra-light">3 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification highlighted flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Banana Inc. posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">4 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo13.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “Web designer needed” from<span class="company-name">Bull Creative Agency.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
												<p class="ultra-light">5 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo14.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “We’re looking for a designer” from<span class="company-name">Cat Studio</span>has expired.</p>
												<p class="ultra-light">6 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification highlighted flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
												<p class="ultra-light">1 day ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo12.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Prymb Creative Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo08.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Elephant Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo11.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Evotweet</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo14.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
											<p>Your bookmarked job “We're looking for a designer'” from<span class="company-name">Cat studio</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo15.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Audiotorium</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        </div> <!-- end .notifications-list-wrapper -->
						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
										<ul class="list-unstyled flex no-column items-center">
											<li><a href="#0">1</a></li>
											<li><a href="#0">2</a></li>
											<li><a href="#0">3</a></li>
											<li><a href="#0">4</a></li>
											<li><a href="#0">5</a></li>									
										</ul>
										<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
									</div> <!-- end .jobpress-custom-pager -->							        
							    </div> <!-- end #notifications-tab -->

							    <div id="resume" class="tab-pane fade in active">
							    	<div class="profile-badge"><h6>My resume</h6></div>
							        <div class="profile-wrapper">

										<div class="profile-info profile-section flex no-column no-wrap">
											<div class="profile-picture">
												<img src="<?php echo ASSET_URL;?>assets/images/avatar/m.png" alt="candidate-picture" class="img-responsive">
											</div> <!-- end .user-picture -->
											<div class="profile-meta">
												<h4 class="dark">Mark anderson</h4>
												<p>UI/UX Designer</p>
												<div class="profile-contact flex items-center no-wrap no-column">
													<h6 class="contact-location">Manhattan,<span>NYC, USA</span></h6>
													<h6 class="contact-phone">(+01)-212-322-5732</h6>
													<h6 class="contact-email"><?php $fetch->getInformation('user_account', 'email_address'); ?></h6>
												</div> <!-- end .profile-contact -->
												<div class="profile-contact flex items-center no-wrap no-column">
													<h6 class="contact-location">20 yrs old,<span>June 06 1996</span></h6>
													<h6 class="contact-phone">Filipino</h6>
													<h6 class="contact-email">Single</h6>
												</div> <!-- end .profile-contact -->
											</div> <!-- end .profile-meta -->
										</div> <!-- end .profile-info -->

										<div class="divider"></div>

										<div class="profile-about profile-section">
											<h3 class="dark profile-title">Career Objective<span class="btn-edit-icon btn-edit-career"><i class="ion-edit"></i></span></h3>
											<!-- <textarea name="" id="" cols="30" rows="10">Nullam semper erat arcu, ac tincidunt sem venenatis vel. Curabitur at dolor ac ligula fermentum euismod ac ullamcorper nulla. Integer blandit ultricies aliquam. Pellentesque quis dui varius, dapibus velit id, iaculis ipsum. Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien, tempus sit amet rutrum eu, commodo eu lacus. Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleif end tempor vitae augue. Fusce eget arcu et nibh dapibus maximus consectetur in est. Sed iaculis luctus nibh sed venenatis.</textarea> -->
											<div>
												<p>Nullam semper erat arcu, ac tincidunt sem venenatis vel. Curabitur at dolor ac ligula fermentum euismod ac ullamcorper nulla. Integer blandit ultricies aliquam. Pellentesque quis dui varius, dapibus velit id, iaculis ipsum. Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien, tempus sit amet rutrum eu, commodo eu lacus. Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleif end tempor vitae augue. Fusce eget arcu et nibh dapibus maximus consectetur in est. Sed iaculis luctus nibh sed venenatis.</p>
											</div>
										</div> <!-- end .profile-about -->

										<div class="divider"></div>

										<div class="profile-experience-wrapper profile-section">
											<h3 class="dark profile-title">
													Work experience 
													<span class="show-new-experience-view"><i class="ion-plus"></i></span>
											</h3>
											
											<div class="new-experience-view hide">
												<div class="form-fields-wrapper">
													<h3 class="form-fields-title dark">Add new work experience</h3>

													<div class="form-group-wrapper flex space-between items-center">
														<div class="form-group">
															<p class="label">Company Logo</p>
															<input type="file" id="candidate-position" name="candidate-position" placeholder="">
														</div> <!-- end .form-group -->
														<div class="form-group">
															<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big01.jpg" alt="company-logo" class="img-responsive pull-right">															
														</div> <!-- end .form-group -->
													</div> <!-- end .form-group-wrapper -->


													<div class="form-group-wrapper flex space-between items-center">
														<div class="form-group">
															<p class="label">Company Name</p>
															<input type="text" id="candidate-position" name="candidate-position" placeholder="">
														</div> <!-- end .form-group -->
														<div class="form-group">
															<p class="label">Position</p>
															<input type="text" id="candidate-language" name="candidate-language" placeholder="">
														</div> <!-- end .form-group -->
													</div> <!-- end .form-group-wrapper -->
													<div class="form-group-wrapper flex space-between items-center">
														<div class="form-group">
															<p class="label">Job Started</p>
															<input type="date" id="candidate-job-type" name="candidate-job-type" placeholder="">
														</div> <!-- end .form-group -->
														<div class="form-group">
															<p class="label">Job Ended</p>
															<input type="date" id="candidate-job-location" name="candidate-job-location" placeholder="">
														</div> <!-- end .form-group -->
													</div> <!-- end .form-group-wrapper -->

													<div class="form-group-wrapper">
														<div class="form-group">
															<p class="label">Job Description</p>
															<textarea name="candidate-desc" id="candidate-desc" rows="6"></textarea>
														</div> <!-- end .form-group -->
													</div> <!-- end .form-group-wrapper -->

												</div> <!-- end .form-fields-wrapper -->
												<div class="button-wrapper text-center">
													<button type="button" class="button g-plus-btn hide-new-experience-view">Cancel</button>
													<button type="button" class="button">Save</button>
												</div> <!-- end .button-wrapper -->	
											</div>
											<div class="spacer-md"></div>
											<div class="profile-experience flex space-between no-wrap no-column">
												<div class="profile-experience-left">
													<h5 class="profile-designation dark">UI/UX designer</h5>
													<h5 class="profile-company dark">Banana inc.</h5>
													<p class="small ultra-light">May 2015 - Present (1.5 years)</p>
													<p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>
													<h6 class="text-info show-new-experience-view">Edit &nbsp; [ <span><i class="ion-edit"></i></span> ]</h6>
													<!-- projects-count -->
												</div> <!-- end .profile-experience-left -->
												<div class="profile-experience-right">
													<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big01.jpg" alt="company-logo" class="img-responsive">
												</div> <!-- end .profile-experience-right -->
											</div> <!-- end .profile-experience -->
											<div class="spacer-md"></div>
										</div> <!-- end .profile-experience-wrapper -->

										<div class="divider"></div>

										<div class="profile-education-wrapper profile-section">
											<h3 class="dark profile-title">Education<span><i class="ion-edit"></i></span></h4>											
											<div class="profile-education">												
												<h5 class="dark">Massachusetts Institute of Technology</h5>
												<p>Bachelor of Computer Science</p>
												<p class="ultra-light">2010-2014</p>
											</div> <!-- end .profile-education -->
											<div class="spacer-md"></div>											
											<div class="profile-education">												
												<h5 class="dark">School of Arts & Sciences of Stanford University</h5>
												<p>Bachelor of Arts & Sciences</p>
												<p class="ultra-light">2008-2012</p>
											</div> <!-- end .profile-education -->
										</div> <!-- end .profile-education-wrapper -->

										<div class="divider"></div>

										<div class="profile-skills-wrapper profile-section">
											<h3 class="dark profile-title">Summary skill<span><i class="ion-edit"></i></span></h3>
											<div class="progress-wrapper flex space-between items-center no-wrap">
												<h6 class="progress-skill">HTML</h6>											
												<div class="progress">													
													<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
													</div> <!-- end .progress-bar -->
												</div> <!-- end .progress -->
												<h6 class="percentage"><span class="countTo" data-from="0" data-to="90">90</span>%</h6>
											</div> <!-- end .progress-wrapper -->
											<div class="spacer-xs"></div>
											<div class="progress-wrapper flex space-between items-center no-wrap">
												<h6 class="progress-skill">WordPress</h6>											
												<div class="progress">													
													<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
													</div> <!-- end .progress-bar -->
												</div> <!-- end .progress -->
												<h6 class="percentage"><span class="countTo" data-from="0" data-to="80">80</span>%</h6>
											</div> <!-- end .progress-wrapper -->
											<div class="spacer-xs"></div>
											<div class="progress-wrapper flex space-between items-center no-wrap">
												<h6 class="progress-skill">PS</h6>											
												<div class="progress">													
													<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
													</div> <!-- end .progress-bar -->
												</div> <!-- end .progress -->
												<h6 class="percentage"><span class="countTo" data-from="0" data-to="60">60</span>%</h6>
											</div> <!-- end .progress-wrapper -->
											<div class="spacer-xs"></div>
											<div class="progress-wrapper flex space-between items-center no-wrap">
												<h6 class="progress-skill">AI</h6>											
												<div class="progress">													
													<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
													</div> <!-- end .progress-bar -->
												</div> <!-- end .progress -->
												<h6 class="percentage"><span class="countTo" data-from="0" data-to="90">90</span>%</h6>
											</div> <!-- end .progress-wrapper -->
										</div> <!-- end .profile-skills-wrapper -->

							        </div> <!-- end .profile-wrapper -->						        
							    </div> <!-- end #resume-tab -->

							    <div id="change-password" class="tab-pane fade in">							    	
							        <div class="password-form-wrapper">	
							        	<h3 class="dark">Change Password</h3>									
			                            <form class="password-form">
											<div class="form-group">
											    <label for="InputEmail1">Old password<sup>*</sup></label>
											    <input type="email" class="form-control" id="InputEmail1" placeholder="">
											</div>

											<div class="form-group">
											    <label for="InputPassword1">New Password<sup>*</sup></label>
											    <input type="password" class="form-control" id="InputPassword1" placeholder="">
											</div>

											<div class="form-group">
											    <label for="InputPassword1">Confirm New Password<sup>*</sup></label>
											    <input type="password" class="form-control" id="InputPassword1" placeholder="">
											</div>											
										</form> <!-- end .password-form -->
										<div class="password-button-wrapper">
												<button type="submit" class="button">Save change</button>
										</div> <!-- end .password-button-wrapper -->
							        </div> <!-- end .password-form-wrapper -->						        
							    </div> <!-- end #change-password-tab -->

							</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Footer -->
		<div class="section footer transparent" style="background-image: url('<?php echo ASSET_URL;?>assets/images/background03.jpg');">
			<div class="container">
				<div class="top flex space-between items-center">
					<img src="<?php echo ASSET_URL;?>assets/images/footer-logo.png" alt="footer-logo" class="img-responsive">
					<ul class="list-unstyled footer-menu flex">
						<li><a href="#0">Home</a></li>
						<li><a href="#0">About</a></li>
						<li><a href="#0">Browse Jobs</a></li>
						<li><a href="#0">Browse candidates</a></li>
						<li><a href="#0">Contact</a></li>
					</ul> <!-- end .footer-menu -->				
				</div> <!-- end .top -->
				<div class="footer-widgets flex no-column space-between">					
					<div class="widget">
						<h6>About</h6>
						<ul class="list-unstyled">
							<li><a href="#0">Company</a></li>
							<li><a href="#0">Our Partners</a></li>
							<li><a href="#0">Blog</a></li>
							<li><a href="#0">FAQ</a></li>
							<li><a href="#0">Pricing</a></li>
							<li><a href="#0">Help Center</a></li>
							<li><a href="#0">Team</a></li>
							<li><a href="#0">Contact Us</a></li>
						</ul>
					</div> <!-- end .widget -->
					<div class="widget">
						<h6>For candidates</h6>
						<ul class="list-unstyled">
							<li><a href="#0">Browse Jobs</a></li>
							<li><a href="#0">Browse categories</a></li>
							<li><a href="#0">Submit Resume</a></li>
							<li><a href="#0">Candidate Dashboard</a></li>
							<li><a href="#0">Job Alerts</a></li>
							<li><a href="#0">My Bookmarks</a></li>
						</ul>
					</div> <!-- end .widget -->
					<div class="widget">
						<h6>For companies</h6>
						<ul class="list-unstyled">
							<li><a href="#0">Browse Candidates</a></li>
							<li><a href="#0">Company Dashboard</a></li>
							<li><a href="#0">Add A Job</a></li>
							<li><a href="#0">Packages</a></li>
						</ul>
					</div> <!-- end .widget -->
					<div class="widget">
						<h6>Follow us</h6>
						<ul class="list-unstyled social-icons flex no-column">
							<li><a href="#0"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#0"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#0"><i class="ion-social-youtube"></i></a></li>
							<li><a href="#0"><i class="ion-social-instagram"></i></a></li>
							<li><a href="#0"><i class="ion-social-linkedin"></i></a></li>
						</ul>				
						<h6>Subscribe Us</h6>
						<p>Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleifend tempor vitae augue.</p>
	                    <form class="form-inline subscribe-form flex no-column no-wrap items-center">
	                        <div class="form-group">
	                        	<input type="text" class="form-control" placeholder="Your email">
	                        </div> <!-- end .form-group -->
	                        <button type="submit" class="button"><i class="ion-ios-arrow-thin-right"></i></button>
	                  	</form>
					</div> <!-- end .widget -->
				</div> <!-- end .footer-widgets -->
				<div class="bottom flex space-between items-center">
					<p class="copyright-text small">&copy; 2017 <a href="#0">JobPress</a>. All Rights Reserved. Designed by <a href="#0">LeoStudo</a>.</p>
					<ul class="list-unstyled copyright-menu flex no-column">
						<li><a href="#0">Privacy policy</a></li>
						<li><a href="#0">Terms of service</a></li>
						<li><a href="#0">Conditions</a></li>
					</ul> <!-- end .copyright-menu -->
				</div> <!-- end .bottom -->
			</div> <!-- end .container -->
		</div> <!-- end .footer -->


		<!-- Scripts -->
		<!-- jQuery -->		
		<script src="<?php echo ASSET_URL;?>assets/js/jquery-3.1.1.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo ASSET_URL;?>assets/js/bootstrap.min.js"></script>
		<!-- Owl Carousel -->
		<script src="<?php echo ASSET_URL;?>assets/js/owl.carousel.min.js"></script>
		<!-- Wow.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/wow.min.js"></script>
		<!-- Typehead.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/typehead.js"></script>
		<!-- Tagsinput.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/tagsinput.js"></script>
		<!-- Bootstrap Select -->
		<script src="<?php echo ASSET_URL;?>assets/js/bootstrap-select.js"></script>		
		<!-- Waypoints -->
		<script src="<?php echo ASSET_URL;?>assets/js/jquery.waypoints.min.js"></script>
		<!-- CountTo -->
		<script src="<?php echo ASSET_URL;?>assets/js/jquery.countTo.js"></script>
		<!-- Isotope -->
		<script src="<?php echo ASSET_URL;?>assets/js/isotope.pkgd.min.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/imagesloaded.pkgd.min.js"></script>
		<!-- Magnific-Popup -->
		<script src="<?php echo ASSET_URL;?>assets/js/jquery.magnific-popup.js"></script>
		<!-- Scripts.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/scripts.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/functions.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/applicant.js"></script>

	</body>

<!-- Mirrored from jobpress.icookcode.net/dev/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Dec 2018 14:59:28 GMT -->
</html>