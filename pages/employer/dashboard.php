<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from jobpress.icookcode.net/dev/employer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Dec 2018 14:59:28 GMT -->
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

		<?php include './pages/employer/header.php'; ?>
		
		<!-- Responsive Menu -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<?php if($fetch->getInformation('user_account', 'status') != 'verified') { include './pages/lib/pending-notice-popup.php'; } ?>

		<!-- Employer Dashboard -->
		<div class="section employer-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="employer-dashboard-wrapper flex space-between no-wrap">

						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">
								<li class="heading">Manage account</li>
							    <li class="active"><a data-toggle="pill" href="#profile">My Profile</a></li>
							    <li><a data-toggle="pill" href="#favorite-candidates">Favorite Candidates</a></li>
							    <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications-employer">Notifications</a> <span class="notification-count">2</span></li>
							    <li><a data-toggle="pill" href="#packages">Packages</a></li>
							    <li class="nav-divider"></li>
							   	<li class="heading">Manage job</li>
								<li><a data-toggle="pill" href="#manage-jobs">Manage Jobs</a></li>
							    <li><a data-toggle="pill" href="#manage-applications-employer">Manage Applications</a></li>
							    <li class="nav-divider"></li>
							    <li><a data-toggle="pill" href="#change-password-employer">Change Password</a></li>
							    <li><a data-toggle="pill" href="#signout-employer">Sign Out</a></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">
							<div class="tab-content employer-dashboard">

							    <div id="favorite-candidates" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Favorite Candidates</h3>
							        <div class="favorite-candidates-list-wrapper">

							        	<ul class="fav-candidates-table-headings flex items-center no-column list-unstyled">
							        		<li class="candidate-name-cell candidate-cell"><h6>Name</h6></li>
							        		<li class="candidate-skills-cell candidate-cell"><h6>Skills</h6></li>
							        		<li class="candidate-location-cell"><h6>Location</h6></li>	
							        	</ul> <!-- end .fav-candidates-table-headings -->

							        	<div class="fav-candidates-wrapper">

							        		<div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small01.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Richard Thomas</h4>
															<p>UI/UX Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Skills</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm grey ">PS</button>
									        			<button type="button" class="button button-sm grey">AI</button>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-skills-cell -->

								        		<div class="candidate-location-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Location</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Park Ave, NYC, USA</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-location-cell -->

								        		<div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .fav-candidate -->

							        		<div class="divider"></div>


							        		<div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small02.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>David Ortega</h4>
															<p>Front-end developer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Skills</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm grey ">PS</button>
									        			<button type="button" class="button button-sm grey">AI</button>
									        			<button type="button" class="button button-sm grey">HTML/CSS</button>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-skills-cell -->

								        		<div class="candidate-location-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Location</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Park Ave, NYC, USA</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-location-cell -->

								        		<div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .fav-candidate -->

							        		<div class="divider"></div>

							        		<div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small03.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Tammy Dixon</h4>
															<p>Copywriter</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Skills</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm grey ">MS WORD</button>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-skills-cell -->

								        		<div class="candidate-location-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Location</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Park Ave, NYC, USA</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-location-cell -->

								        		<div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .fav-candidate -->

							        		<div class="divider"></div>

							        		<div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small04.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Brandon Reynolds</h4>
															<p>Web Developer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Skills</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm grey ">HTML/CSS</button>
									        			<button type="button" class="button button-sm grey">PHP</button>
									        			<button type="button" class="button button-sm grey">Jquery</button>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-skills-cell -->

								        		<div class="candidate-location-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Location</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Park Ave, NYC, USA</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-location-cell -->

								        		<div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .fav-candidate -->

							        		<div class="divider"></div>


							        		<div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small05.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Kathy Crawford</h4>
															<p>Graphic Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Skills</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm grey ">PS</button>
									        			<button type="button" class="button button-sm grey">AI</button>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-skills-cell -->

								        		<div class="candidate-location-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Location</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Park Ave, NYC, USA</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-location-cell -->

								        		<div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .fav-candidate -->

							        		<div class="divider"></div>

							        	</div> <!-- end .fav-candidates-wrapper -->
						        	</div> <!-- end .favorite-candidates-list-wrapper -->

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

							    </div> <!-- end #favorite-candidates-tab -->

							    <div id="manage-applications-employer" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Manage applications</h3>
							        <div class="candidate-applications-list-wrapper">

							        	<ul class="candidate-applications-table-headings flex items-center no-column no-wrap list-unstyled">
							        		<li class="candidate-name-cell candidate-cell"><h6>Name</h6></li>
							        		<li class="candidate-job-cell candidate-cell"><h6>Job</h6></li>
							        		<li class="candidate-resume-cell"><h6>Resume</h6></li>
							        		<li class="candidate-actions-cell"><h6>Actions</h6></li>
							        	</ul> <!-- end .fav-candidates-table-headings -->

							        	<div class="candidate-applications-wrapper">

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small01.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Richard Thomas</h4>
															<p>UI/UX Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Web Designer needed</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small02.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>David Ortega</h4>
															<p>Front-end developer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Front-end developer needed</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small06.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Nancy Suvillivan</h4>
															<p>Graphic Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Graphic Designer needed</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small07.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Gregory cooper</h4>
															<p>Web Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Web Designer needed</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small08.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Brittany Riley</h4>
															<p>Marketer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Looking for a market position</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        	</div> <!-- end .candidate-applications-wrapper -->
						        	</div> <!-- end .candidate-applications-list-wrapper -->

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

							    </div> <!-- end #manage-applications-employer -->

							    <div id="manage-jobs" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Manage Jobs</h3>
							        <div class="posted-jobs-list-wrapper">

							        	<ul class="posted-jobs-table-headings flex items-center no-column list-unstyled">
							        		<li class="posted-job-title-cell"><h6>Name</h6></li>
							        		<li class="posted-job-type-cell"><h6>Job Type</h6></li>
							        		<li class="posted-job-candidates-cell"><h6>Candidates</h6></li>
							        		<li class="posted-job-featured-cell"><h6>Featured</h6></li>
							        	</ul> <!-- end .posted-jobs-table-headings -->

							        	<div class="posted-jobs-wrapper">

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>Web Designer needed</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm freelancer">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star grey"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>We're hring a fullstack developer</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm full-time">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star safron"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>Front-end developer needed</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm part-time">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star grey"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>Looking for internship web designer</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm internship">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star grey"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>We're looking for an project leader</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm full-time">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star safron"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        	</div> <!-- end .posted-jobs-wrapper -->
						        	</div> <!-- end .posted-jobs-list-wrapper -->

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

							    <div id="notifications-employer" class="tab-pane fade in">
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

							    <div id="profile" class="tab-pane fade in active">
							    	<div class="profile-badge"><h6>Profile</h6></div>
							        <div class="profile-wrapper">

										<div class="profile-info profile-section flex no-column no-wrap">
											<div class="profile-picture">
												<img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $fetch->getInformation('employer_information', 'logo'); ?>" alt="company-logo" class="img-responsive" width="150" height="150">
											</div> <!-- end .user-picture -->
											<div class="profile-meta">
												<h4 class="dark"><?php echo $fetch->getInformation('employer_information', 'name'); ?></h4>
												<p><?php echo $fetch->getInformation('employer_information', 'address'); ?></p>
												<div class="profile-contact flex items-center no-wrap no-column">													
													<h6 class="contact-phone"><?php echo $fetch->getInformation('employer_information', 'contact_no'); ?></h6>
													<h6 class="contact-email"><?php echo $fetch->getInformation('employer_information', 'email'); ?></h6>
													<h6 class="contact-email"><?php echo '<a href="'.$fetch->getInformation('employer_information', 'website').'">Website</a>'; ?></h6>
												</div> <!-- end .profile-contact -->
												<span><?php echo $fetch->getInformation('employer_information', 'address'); ?></span>
											</div> <!-- end .profile-meta -->
										</div> <!-- end .profile-info -->

										<div class="divider"></div>

										<div class="profile-about profile-section">
											<h3 class="dark profile-title">About company<span><i class="ion-edit"></i></span></h3>
											<p><?php echo $fetch->getInformation('employer_information', 'about'); ?></p>
										</div> <!-- end .profile-about -->

										<div class="divider"></div>

										<div class="profile-experience-wrapper profile-section">
											<h3 class="dark profile-title">Awards<span><i class="ion-edit"></i></span></h3>
											<div class="profile-experience flex space-between no-wrap no-column">
												<div class="profile-experience-left">
													<h5 class="profile-designation dark">AWWWARDS</h5>
													<h5 class="profile-company dark">Site of the month</h5>
													<p class="small ultra-light">Aug 2016</p>
													<p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>
													<h6 class="projects-count">http://banana.com</h6>
												</div> <!-- end .profile-experience-left -->
											</div> <!-- end .profile-experience -->
											<div class="spacer-md"></div>
											<div class="profile-experience flex space-between no-wrap no-column">
												<div class="profile-experience-left">
													<h5 class="profile-designation dark">Best css award</h5>
													<h5 class="profile-company dark">Site of the day</h5>
													<p class="small ultra-light">Aug 16th, 2016</p>
													<p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>
													<h6 class="projects-count">http://banana.com</h6>
												</div> <!-- end .profile-experience-left -->
											</div> <!-- end .profile-experience -->
										</div> <!-- end .profile-experience-wrapper -->

							        </div> <!-- end .profile-wrapper -->						        
							    </div> <!-- end #profile-tab -->

							    <div id="change-password-employer" class="tab-pane fade in">							    	
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

							</div> <!-- end .employer-dashboard -->
						</div> <!-- end .right-side-content -->

					</div> <!-- end .employer-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		
		<?php include './pages/footer.php'; ?>

		<!-- Scripts -->
		<!-- jQuery -->		
		<script src="<?php echo ASSET_URL;?>assets/js/jquery-3.1.1.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo ASSET_URL;?>assets/js/bootstrap.min.js"></script>
		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
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
		<?php if($fetch->getInformation('user_account', 'status') == 'pending') {?>
			<script>
				setTimeout(() => {
					$('#pending-notice-popup').modal('show');
				}, 1500);
			</script>
		<?php } ?>
	</body>

<!-- Mirrored from jobpress.icookcode.net/dev/employer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Dec 2018 14:59:31 GMT -->
</html>