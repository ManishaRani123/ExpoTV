<?php

session_start();
include_once("db-config.php");
include_once("functions.php");
include_once("func.php");

$orgSlug = (string)$_GET['name'];
//$queryData = mysqli_query($mysqli,"SELECT * FROM users WHERE email = '$username'");
$featuredExhibitors = mysqli_query($mysqli,"SELECT * FROM exhibitor_profile WHERE slug = '$orgSlug'");

?>
	

<!DOCTYPE html>
<html lang="zxx">
	<head>
	  <?php include 'includes/header.php';?>  

	  <link rel="stylesheet" type="text/css" href="assets/css/custom-style.css">
	</head>
	
	<body class="blue-skin">
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
		<!-- ============================================================== -->
		<!-- Main wrapper - style you can find in pages.scss -->
		<!-- ============================================================== -->


		<div id="main-wrapper">
		
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			<!-- Start Navigation -->
			<?php include 'includes/navigation.php'; ?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<?php while($featuredExhibitor = mysqli_fetch_array($featuredExhibitors))
				{ ?>	
			
			<!-- Start Banner  -->
			<section class="page-title-banner" style="/*background-image:url(assets/img/banner-3.jpg)*/;padding:10px;min-height: 600px;background:radial-gradient(circle at center, #273240 , #fafafa)">
				<div class="container">
					<div class="row m-0 align-items-end detail-swap">
						<div class="tr-list-wrap">
							<!-- Begin  Content -->
							<div class="layered-image">
							    <img class="image-exhibitor" src="upload/logo/<?php echo $featuredExhibitor['profile_logo']; ?>" alt="<?php echo $featuredExhibitor['orgname']; ?>" title="<?php echo $featuredExhibitor['orgname']; ?>" />
							    <img class="image-base" src="upload/cover/<?php echo $featuredExhibitor['profile_coverImg']; ?>" alt="<?php echo $featuredExhibitor['orgname']; ?>" title="<?php echo $featuredExhibitor['orgname']; ?>"/>
							    <img class="image-overlay" src="assets/img/booth.png" alt="<?php echo $featuredExhibitor['orgname']; ?>" />
							  </div>

	
						</div>
					</div>
				</div>
			</section>
			<!--  End Banner -->
			
			<!-- Property Detail Start  -->
			<section class="gray">
				<div class="container">
					<div class="row">
						
						<!-- property main detail -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							
							<!-- Single Block Wrap -->
							<div class="Reveal-block-wrap">
								
								<div class="Reveal-block-header">
									<h2><?php echo $featuredExhibitor['orgname']; ?></h2>
									<quote><?php echo $featuredExhibitor['quote']; ?></quote>
									<!-- <h4 class="block-title">Description</h4> -->
								</div>
								
								<div class="Reveal-block-body">
									<?php echo $featuredExhibitor['description']; ?>
								</div>
								
							</div>
							

							
							<!-- Single Block Wrap -->
							<div class="Reveal-block-wrap">
								
								<div class="Reveal-block-header">
									<h4 class="block-title">Location</h4>
								</div>
								
								<div class="Reveal-block-body">
									<div class="map-container">
										<?php echo $featuredExhibitor['googleMapIframe']; ?>
									</div>

								</div>
								
							</div>
							
							
							
							<!-- Add Review Wrap -->
							<div class="Reveal-block-wrap">
								
								<div class="Reveal-block-header">
									<h4 class="block-title">Add Review</h4>
								</div>
								
								<div class="Reveal-block-body">
								
									<div class="giv-averg-rate">
										<div class="row">
											<div class="col-lg-8 col-md-8 col-sm-12">
												<div class="row">
												
													<div class="col-lg-6 col-md-6 col-sm-12">
														<label>Service?</label>
														<div class="rate-stars">
															<input type="checkbox" id="st1" value="1" />
															<label for="st1"></label>
															<input type="checkbox" id="st2" value="2" />
															<label for="st2"></label>
															<input type="checkbox" id="st3" value="3" />
															<label for="st3"></label>
															<input type="checkbox" id="st4" value="4" />
															<label for="st4"></label>
															<input type="checkbox" id="st5" value="5" />
															<label for="st5"></label>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-12">
														<label>Value for Money?</label>
														<div class="rate-stars">
															<input type="checkbox" id="vst1" value="1" />
															<label for="vst1"></label>
															<input type="checkbox" id="vst2" value="2" />
															<label for="vst2"></label>
															<input type="checkbox" id="vst3" value="3" />
															<label for="vst3"></label>
															<input type="checkbox" id="vst4" value="4" />
															<label for="vst4"></label>
															<input type="checkbox" id="vst5" value="5" />
															<label for="vst5"></label>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-12">
														<label>Cleanliness?</label>
														<div class="rate-stars">
															<input type="checkbox" id="cst1" value="1" />
															<label for="cst1"></label>
															<input type="checkbox" id="cst2" value="2" />
															<label for="cst2"></label>
															<input type="checkbox" id="cst3" value="3" />
															<label for="cst3"></label>
															<input type="checkbox" id="cst4" value="4" />
															<label for="cst4"></label>
															<input type="checkbox" id="cst5" value="5" />
															<label for="cst5"></label>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-12">
														<label>Location?</label>
														<div class="rate-stars">
															<input type="checkbox" id="lst1" value="1" />
															<label for="lst1"></label>
															<input type="checkbox" id="lst2" value="2" />
															<label for="lst2"></label>
															<input type="checkbox" id="lst3" value="3" />
															<label for="lst3"></label>
															<input type="checkbox" id="lst4" value="4" />
															<label for="lst4"></label>
															<input type="checkbox" id="lst5" value="5" />
															<label for="lst5"></label>
														</div>
													</div>
													
												</div>
											</div>
											
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="avg-total-pilx">
													<h4 class="high">5.0</h4>
													<span>Average Ratting</span>
												</div>
											</div>
										</div>
									</div>
									
									<div class="review-form-box form-submit">
										<form>
											<div class="row">
												
												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label>Name</label>
														<input class="form-control" type="text" placeholder="Your Name">
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label>Email</label>
														<input class="form-control" type="email" placeholder="Your Email">
													</div>
												</div>
												
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label>Review</label>
														<textarea class="form-control ht-140" placeholder="Review"></textarea>
													</div>
												</div>
												
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<button type="submit" class="btn btn-theme">Submit Review</button>
													</div>
												</div>
												
											</div>
										</form>
									</div>
									
								</div>
								
							</div>
							
							
						</div>
						
						<!-- Listing Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="verified-list mb-4">
								<div class="tr-list-detail">
								<!-- <div class="tr-list-thumb">
									<img src="assets/img/user-2.png" class="img-responsive" alt="">
								</div> -->
								<div class="tr-list-info">
									<img src="upload/logo/<?php echo $featuredExhibitor['profile_logo']; ?>" class="img-responsive" alt="<?php echo $featuredExhibitor['orgname']; ?>" title="<?php echo $featuredExhibitor['orgname']; ?>" class="img img-responsive img-thumbnail" style="height: 100px; width: auto;margin-bottom: 20px;" >

									<div class="cate-gorio"><a href="#">Estd: <?php echo $featuredExhibitor['establisheddate']; ?></a></div>
									<h4 class="veryfied-list"><i class="ti-phone"></i><?php echo $featuredExhibitor['orgphone']; ?></h4>
									<p><i class="ti-location-pin"></i><?php echo $featuredExhibitor['fulladdress']; ?></p>
										<p><i class="ti-fax"></i>Postal Code: <?php echo $featuredExhibitor['postalcode']; ?></p>
										<div class="cate-gorio"><a href="<?php echo $featuredExhibitor['website']; ?>" target="_blank">Visit Website </a></div>									
								</div>
							</div>

							</div>

							<div class="verified-list mb-4">
								<i class="ti-check"></i>Verified Listing
							</div>
							
							<div class="page-sidebar">
								<!-- Some Imp Boxes -->
								<div class="imp-boxes">
									<div class="imp-boxes-single">
										<div class="imp-boxes-single-icon"><img src="assets/img/phone.svg" width="25" alt="" /></div>
										<div class="imp-boxes-single-content"><?php echo $featuredExhibitor['orgphone']; ?></div>
									</div>
									<div class="imp-boxes-single">
										<div class="imp-boxes-single-icon"><img src="assets/img/mail.svg" width="25" alt="" /></div>
										<div class="imp-boxes-single-content"><?php echo $featuredExhibitor['orgemail']; ?></div>
									</div>
									<div class="imp-boxes-single">
										<div class="imp-boxes-single-icon"><img src="assets/img/share.svg" width="25" alt="" /></div>
										<div class="imp-boxes-single-content">
											<ul>
												<li><a href="#"><i class="ti-facebook"></i></a></li>
												<li><a href="#"><i class="ti-twitter"></i></a></li>
												<li><a href="#"><i class="ti-google"></i></a></li>
												<li><a href="#"><i class="ti-instagram"></i></a></li>
												<li><a href="#"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Some Imp Boxes -->


								<!-- Agent Detail -->
								<div class="Reveal-side-widget form-submit">
									<div class="Reveal-Reveal-side-widget-header dark green">
										<div class="Reveal-thumb-photo"><img src="upload/logo/<?php echo $featuredExhibitor['contactPerson_Img']; ?>" alt="<?php echo $featuredExhibitor['orgname']; ?>"></div>
										<div class="Reveal-thumb-details">
											<h4><?php echo $featuredExhibitor['focalperson']; ?></h4>
											<span><?php echo $featuredExhibitor['yourposition']; ?></span>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="Reveal-Reveal-side-widget-body">
										<div class="form-group">
											<label>Full Name</label>
											<input type="text" class="form-control" placeholder="Your Name">
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="text" class="form-control" placeholder="Your Email">
										</div>
										<div class="form-group">
											<label>Message</label>
											<textarea class="form-control" placeholder="Send Message to author..."></textarea>
										</div>
										<button class="btn btn-theme full-width">Send Message</button>
									</div>
								</div>
								
			
								<!-- Review Block Wrap -->
								<div class="Reveal-overview-rating">
									<div class="Reveal-overview-rating-box">
										<span class="Reveal-overview-rating-box-total">4.2</span>
									</div>

									<div class="Reveal-rating-bars">
										<div class="Reveal-Reveal-rating-bars-item">
											<span class="Reveal-Reveal-rating-bars-name">Service</span>
											<span class="Reveal-Reveal-rating-bars-inner">
												<span class="Reveal-Reveal-rating-bars-rating high" data-rating="4.7">
													<span class="Reveal-Reveal-rating-bars-rating-inner" style="width: 85%;"></span>
												</span>
												<strong>4.7</strong>
											</span>
										</div>
										<div class="Reveal-Reveal-rating-bars-item">
											<span class="Reveal-Reveal-rating-bars-name">Value for Money</span>
											<span class="Reveal-Reveal-rating-bars-inner">
												<span class="Reveal-Reveal-rating-bars-rating good" data-rating="3.9">
													<span class="Reveal-Reveal-rating-bars-rating-inner" style="width: 75%;"></span>
												</span>
												<strong>3.9</strong>
											</span>
										</div>
										<div class="Reveal-Reveal-rating-bars-item">
											<span class="Reveal-Reveal-rating-bars-name">Location</span>
											<span class="Reveal-Reveal-rating-bars-inner">
												<span class="Reveal-Reveal-rating-bars-rating mid" data-rating="3.2">
													<span class="Reveal-Reveal-rating-bars-rating-inner" style="width: 52.2%;"></span>
												</span>
												<strong>3.2</strong>
											</span>
										</div>
										<div class="Reveal-Reveal-rating-bars-item">
											<span class="Reveal-Reveal-rating-bars-name">Cleanliness</span>
											<span class="Reveal-Reveal-rating-bars-inner">
												<span class="Reveal-Reveal-rating-bars-rating poor" data-rating="2.0">
													<span class="Reveal-Reveal-rating-bars-rating-inner" style="width:20%;"></span>
												</span>
												<strong>2.0</strong>
											</span>
										</div>
									</div>
								</div>
								
								<!-- Listing Hour Detail -->
								<div class="Reveal-side-widget">
									<div class="Reveal-Reveal-side-widget-header dark red">
										<div class="Reveal-thumb-details">
											<h4>Opening Time</h4>
											<span>8:00 AM To 6:00 PM</span>
										</div>
										<div class="opening-status">Closed</div>
										<div class="clearfix"></div>
									</div>
									
									<div class="Reveal-other-body">
										<ul class="listing-hour-day">
											<li>
												<span class="listing-hour-day">Monday</span>
												<span class="listing-hour-time">10:00 - 6:00</span>
											</li>
											<li>
												<span class="listing-hour-day">Tuesday</span>
												<span class="listing-hour-time">10:00 - 6:00</span>
											</li>
											<li>
												<span class="listing-hour-day">Wednesday</span>
												<span class="listing-hour-time">10:00 - 6:00</span>
											</li>
											<li class="active">
												<span class="listing-hour-day">Thursday</span>
												<span class="listing-hour-time">10:00 - 4:00</span>
											</li>
											<li>
												<span class="listing-hour-day">Friday</span>
												<span class="listing-hour-time">10:00 - 6:00</span>
											</li>
											<li>
												<span class="listing-hour-day">Saturday</span>
												<span class="listing-hour-time">Closed</span>
											</li>
											<li>
												<span class="listing-hour-day">Sunday</span>
												<span class="listing-hour-time">10:00 - 6:00</span>
											</li>
											
										</ul>
									</div>
									
								</div>
								
								
															
							
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- Property Detail End -->

			<?php
				} ?>


			<!-- FeaturedCategories -->
			<?php include('includes/featuredCategoriesGrid.php'); ?>
			<!-- ./FeaturedCategopories -->
			

			
			<!--  Footer Start ==== -->
			<?php include('includes/footer.php'); ?>
			<!-- == Footer End === -->
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-dismiss="modal"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Log <span class="theme-cl">In</span></h4>
							<div class="login-form">
								<form>
								
									<div class="form-group">
										<label>User Name</label>
										<div class="input-with-icon gray">
											<input type="text" class="form-control" placeholder="Username">
											<i class="ti-user"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon gray">
											<input type="password" class="form-control" placeholder="*******">
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width pop-login">Login</button>
									</div>
								
								</form>
							</div>
							<div class="modal-divider"><span>Or login via</span></div>
							<div class="social-login mb-3">
								<ul>
									<li><a href="#" class="btn fb"><i class="ti-facebook"></i></a></li>
									<li><a href="#" class="btn google"><i class="ti-google"></i></a></li>
									<li><a href="#" class="btn twitter"><i class="ti-twitter"></i></a></li>
								</ul>
							</div>
							<div class="modat-foot">
								<div class="md-left">Have't Account? <a href="register.html" class="theme-cl">Sign Up</a></div>
								<div class="md-right"><a href="#" class="theme-cl">Forget Password?</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/rangeslider.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/slider-bg.js"></script>
		<script src="assets/js/lightbox.js"></script> 
		<script src="assets/js/imagesloaded.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/counterup.min.js"></script>
		 
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from codeminifier.com/reveal-live/reveal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jul 2021 10:35:29 GMT -->
</html>