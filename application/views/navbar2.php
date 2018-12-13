	<body>

		<?php
			// Start the session
			session_start();
		?>

		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 085339151177</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> tetracreasoft@gmail.com</a></li>
						<!-- <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li> -->
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-user-o"></i> My Profile</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-1">
							<div class="header-logo">
								<center>
									<a style="font-family: courier; font-size: 20px; color: white" href="<?php echo base_url(); ?>" class="logo">
										<img width="50px" src="<?php echo base_url(); ?>assets/img/logotcs.png" alt="">
										TetraCreaSoft
									</a>
								</center>
							</div>
						</div>
						<div class="col-md-2">
							<div class="header-logo">
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<br>
								<form>
									<select class="input-select">
										<option value="0">Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input2" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-sign-in"></i>
										<span>Login</span>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div>
									<a href="">
										<br>
										<i class="fa fa-user-plus"></i>
										<span>Register</span>
									</a>
								</div>
								<!-- /Cart -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->




		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->

						<nav class="navbar navbar-expand-lg navbar-light bg-light">
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav mr-auto">
		  						<li class="nav-item <?php if($this->uri->uri_string() == 'Creasoft/index') { echo 'active'; } ?>">
									<a class="nav-link" href="<?php echo site_url('Creasoft/index'); ?>">Home</a></li>
								<li class="nav-item <?php if($this->uri->uri_string() == 'Creasoft/service') { echo 'active'; } ?>">
									<a class="nav-link" href="<?php echo site_url('Creasoft/service'); ?>">Services</a></li>
								<li class="nav-item <?php if($this->uri->uri_string() == 'Creasoft/portofolio') { echo 'active'; } ?>">
									<a class="nav-link" href="<?php echo site_url('Creasoft/portofolio'); ?>">Portofolio</a></li>
								<li class="nav-item <?php if($this->uri->uri_string() == 'Creasoft/kategori') { echo 'active'; } ?>">
									<a class="nav-link" href="<?php echo site_url('Creasoft/kategori'); ?>">Kategori</a></li>
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          About
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="<?php echo site_url('Creasoft/about'); ?>">TetraCreaSoft</a>
						          <a class="dropdown-item" href="<?php echo site_url('Creasoft/team'); ?>">Team</a>
						        </div>
						      </li>
						    </ul>
						  </div>
						</nav>

					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
