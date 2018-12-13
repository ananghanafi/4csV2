
<?php 
	$judul = "Home | ";
	include 'head.php';
?>
<?php include 'navbar.php' ?>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img height="240" src="<?php echo base_url(); ?>assets/img/web.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Website<br>Development</h3>
								<a href="<?php echo base_url()."index.php/Creasoft/service" ?>" class="btn btn-primary">View now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img height="240" src="<?php echo base_url(); ?>assets/img/mobileapps.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Mobile<br>Application</h3>
								<a href="<?php echo base_url()."index.php/Creasoft/service" ?>" class="btn btn-primary">View now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img width="100" src="<?php echo base_url(); ?>assets/img/Desktop_app.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Desktop<br>Application</h3>
								<a href="<?php echo base_url()."index.php/Creasoft/service" ?>" class="btn btn-primary">View now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Products</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">

						<div class="col-md-3">				
							<!-- product -->
							<div class="product">
								<div class="product-img">
									<img height="240" src="<?php echo base_url(); ?>assets/img/web.png" alt="">
									<div class="product-label">
										<span class="sale">-30%</span>
										<span class="new">NEW</span>
									</div>
								</div>
								<div class="product-body">
									<p class="product-category">Sistem Informasi</p>
									<h3 class="product-name"><a href="#">Sistem Informasi Kepegawaian</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
								<div class="add-to-cart">
									<a href="<?php echo base_url()."index.php/Creasoft/portofolio" ?>" class="btn add-to-cart-btn"><i class="fa fa-shopping-cart"></i> View</a>
								</div>
							</div>
							<!-- /product -->
						</div>

						<div class="col-md-3">
							<!-- product -->
							<div class="product">
								<div class="product-img">
									<img height="240" src="<?php echo base_url(); ?>assets/img/sistem_prediksi.png" alt="">
									<div class="product-label">
										<span class="new">NEW</span>
									</div>
								</div>
								<div class="product-body">
									<p class="product-category">Machine Learning</p>
									<h3 class="product-name"><a href="#">Sistem Prediksi Jumlah Kemunculan Titik Api</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
								</div>
								<div class="add-to-cart">
									<a href="<?php echo base_url()."index.php/Creasoft/portofolio" ?>" class="btn add-to-cart-btn"><i class="fa fa-shopping-cart"></i> View</a>
								</div>
							</div>
							<!-- /product -->
						</div>

						<div class="col-md-3">			
							<!-- product -->
							<div class="product">
								<div class="product-img">
									<img width="100" src="<?php echo base_url(); ?>assets/img/AR_caleg.png" alt="">
									<div class="product-label">
										<span class="sale">-30%</span>
									</div>
								</div>
								<div class="product-body">
									<p class="product-category">Unity</p>
									<h3 class="product-name"><a href="#">Augmented Reality Calon Legislatif</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
								<div class="add-to-cart">
									<a href="<?php echo base_url()."index.php/Creasoft/portofolio" ?>" class="btn add-to-cart-btn"><i class="fa fa-shopping-cart"></i> View</a>
								</div>
							</div>
							<!-- /product -->
						</div>

						<div class="col-md-3">
							<!-- product -->
							<div class="product">
								<div class="product-img">
									<img width="100" src="<?php echo base_url(); ?>assets/img/onshop.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">ASP.NET MVC</p>
									<h3 class="product-name"><a href="#">Online Shop</a></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
								<div class="add-to-cart">
									<a href="<?php echo base_url()."index.php/Creasoft/portofolio" ?>" class="btn add-to-cart-btn"><i class="fa fa-shopping-cart"></i> View</a>
								</div>
							</div>
							<!-- /product -->
						</div>

						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<br>
		<br>
		<br>

<?php include 'footer.php' ?>
