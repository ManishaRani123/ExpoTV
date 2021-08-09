<?php include_once('func.php'); ?>

<div class="header header-light">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="index.php">
								<img src="assets/img/logo-dark.png" class="logo hd-992" alt="" />
								<img src="assets/img/logo.png" class="logo sw-m" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
								<li><a href="index.php">Home</a></li>                   
								<li><a href="javascript:void(0);">Show Categories<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										
										<?php $cat = showNewCategories(); 
										foreach ($cat as $Catdata): ?>
											<li><a href="category.php?id=<?php echo $Catdata['categoryid']; ?>"><?php echo $Catdata['displayTitle']; ?></a></li>
										<?php endforeach; ?>

									</ul>
								</li>
								
								<li><a href="javascript:void(0);">About Us<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="">About EXPOTV</a></li>
										<li><a href="">How it works</a></li> 
										<li><a href="">FAQs</a></li>    
										<li><a href="">Blog</a></li>
										<li><a href="">Contact Us</a></li>
									</ul>
								</li>
								<li><a href="">Blogs</a></li>
							</ul>

							<ul class="nav-menu nav-menu-social align-to-right">
								<?php if (! empty($_SESSION['logged_in'])) { ?>
								<li class="attributes">
									<div class="btn-group account-drop">
										<button type="button" class="btn btn-order-by-filt theme-cl" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<img src="assets/img/user-1.png" class="avater-img" alt=""><?php echo $_SESSION['username']; ?>
										</button>
										<div class="dropdown-menu pull-right animated flipInX">
											<a href="dashboard-mylistings.php"><i class="ti-dashboard"></i>Dashboard</a>
											<a href="dashboard-mylistings.php"><i class="ti-layers-alt"></i>Add Listing</a>
											<a href="dashboard-mylistings.php"><i class="ti-user"></i>My Profile</a>
											<a class="active" href="logout.php"><i class="ti-unlock"></i>Logout</a>
										</div>
									</div>
								</li>
								 <?php } else { ?>
									<li>
									<a href="login.php">
										<i class="fa fa-sign-in-alt mr-1"></i><span class="dn-lg">Sign In</span>
									</a>
								</li>
								<li class="add-listing bg-whit">
									<a href="">
										 <i class="fas fa-plus-circle"></i> Exhibit Now
									</a>
								</li>
								<?php } ?>

							</ul>
						</div>
					</nav>
				</div>
			</div>