<?php
session_start();
include_once("db-config.php");
include_once("functions.php");
include_once("func.php");

// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }
// $username = $_SESSION["email"];


// $username = $_SESSION["email"];
// global $mysqli;

// $queryData = mysqli_query($mysqli,"SELECT * FROM users WHERE email = '$username'");

?>

<!DOCTYPE html>
<html lang="zxx">
	<head>
	  <?php include 'includes/header.php';?>  
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
			<!-- Top header  -->
			
			<!--  Hero Banner  Start -->
			<div class="image-cover hero-banner" style="background:url(assets/img/banner-main.jpg) no-repeat;" data-overlay="6">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
						
							<h1 class="big-header-capt capti">Transform Your House<br> Into Your Dream Home</h1>
							<div class="full-search-2 Reveal-search Reveal-search-radius box-style">
								<div class="Reveal-search-content">
									
									<div class="row">
									
										<div class="col-lg-4 col-md-4 col-sm-12 br-left-p">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Keywords...">
													<i class="theme-cl ti-search"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-3 col-md-3 col-sm-12 br-left-p">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Location...">
													<i class="theme-cl ti-target"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="form-group">
												<div class="input-with-icon">
													<select id="list-category" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Home Appliances</option>
														<option value="2">Kitchen</option>
														<option value="3">Heating and Cooling</option>
														<option value="4">Gardening</option>
														<option value="5">Dinning Room</option>
														<option value="6">Bedroom</option>
														<option value="7">Bathroom</option>
														<option value="8">Building Materials</option>
														<option value="9">Design Services</option>
													</select>
													<i class="theme-cl ti-briefcase"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-2 col-sm-12">
											<div class="form-group">
												<a href="#" class="btn search-btn">Search</a>
											</div>
										</div>
										
									</div>
									
								</div>
								
							</div>
							
						
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!--  Categories Start -->
			<?php include('includes/categoryScroll.php'); ?>
			<!-- Categories End -->


			<!-- Featured Exhibitors -->
			<?php include('includes/featured-exhibitors.php'); ?>
			<!-- Exhyibitors -->
			

			<!-- FeaturedCategories -->
			<?php include('includes/featuredCategoriesGrid.php'); ?>
			<!-- ./FeaturedCategopories -->
			
			
			<!-- Call To Action Start -->
			<?php include('includes/call-to-action.php'); ?>
			<!-- Call To Action End -->
			
			<!-- ============================ Footer Start ==== -->
			<?php include('includes/footer.php'); ?>
			<!-- ============================ Footer End === -->
			
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