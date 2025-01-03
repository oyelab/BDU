<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Penn - Education HTML Template">
		<meta name="keywords" content="theme_ocean, college, course, e-learning, education, high school, kids, learning, online, online courses, school, student, teacher, tutor, university">
		<meta name="author" content="theme_ocean">
		<!-- SITE TITLE -->
		<title>Penn - Education HTML Template</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">				
		<!--slicknav Css-->
        <link rel="stylesheet" href="assets/css/slicknav.css">		
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">	
		<!-- animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">			
		<!-- Style CSS -->		
		<link rel="stylesheet" href="assets/css/shop.css" />
		<link rel="stylesheet" href="assets/css/style.css" />				
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>
	
	<!-- START PRELOADER -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
	<!-- END PRELOADER -->
	
	<x-navbar />

	<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<h1>Shop Page</h1>
					<ul>
						<li><a href="{{ route('home') }}">Home</a></li>
						<li> / shop</li>
					</ul>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>	
	<!-- END SECTION TOP -->

	<!-- Start product Area -->
	<section id="product_area" class="section-padding">
		<div class="container">		
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
					  <h2>Our Products</h2>
					  <p>Check Our <span><u>All Products</u></span></p>
					</div>						
				</div>
			</div>
		
			<div class="text-center">
				<div class="product_filter">
					<ul>
						<li class=" active filter" data-filter="all">All</li>
						<li class="filter" data-filter=".sale">Sale</li>
						<li class="filter" data-filter=".bslr">Bestseller</li>
						<li class="filter" data-filter=".ftrd">Featured</li>
					</ul>
				</div>
				
				<div class="product_item">
					<div class="row">					
						<div class="col-lg-3 col-md-4 col-sm-6 mix sale">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="assets/images/shop/1.jpg" alt="product image">
										<img class="pic-2" src="assets/images/shop/2.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="ti-zoom-in"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="ti-bag"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="ti-shopping-cart"></i></a></li>
									</ul>
									<span class="product-new-label">Sale</span>
								</div>
								<ul class="rating">
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
								</ul>
								<div class="product-content">
									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$16.00
										<span>$20.00</span>
									</div>
									<a class="add-to-cart" href="">+ Add To Cart</a>
								</div>
							</div>
						</div><!-- End Col -->	
						
						<div class="col-lg-3 col-md-4 col-sm-6 mix ftrd">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="assets/images/shop/3.jpg" alt="product image">
										<img class="pic-2" src="assets/images/shop/4.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="ti-zoom-in"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="ti-bag"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="ti-shopping-cart"></i></a></li>
									</ul>
									<span class="product-new-label">-20%</span>				
								</div>
								<ul class="rating">
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
								</ul>
								<div class="product-content">
									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$16.00
										<span>$20.00</span>
									</div>
									<a class="add-to-cart" href="">+ Add To Cart</a>
								</div>
							</div>
						</div><!-- End Col -->	
								
						<div class="col-lg-3 col-md-4 col-sm-6 mix">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="assets/images/shop/5.jpg" alt="product image">
										<img class="pic-2" src="assets/images/shop/6.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="ti-zoom-in"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="ti-bag"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="ti-shopping-cart"></i></a></li>
									</ul>
									<span class="product-new-label">Sale</span>
								</div>
								<ul class="rating">
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star disable"></li>
								</ul>
								<div class="product-content">
									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$16.00
										<span>$20.00</span>
									</div>
									<a class="add-to-cart" href="">+ Add To Cart</a>
								</div>
							</div>
						</div><!-- End Col -->	

						
						<div class="col-lg-3 col-md-4 col-sm-6 mix sale bslr">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="assets/images/shop/7.jpg" alt="product image">
										<img class="pic-2" src="assets/images/shop/8.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="ti-zoom-in"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="ti-bag"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="ti-shopping-cart"></i></a></li>
									</ul>
									<span class="product-new-label">New</span>
								</div>
								<ul class="rating">
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
								</ul>
								<div class="product-content">
									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$16.00
										<span>$20.00</span>
									</div>
									<a class="add-to-cart" href="">+ Add To Cart</a>
								</div>
							</div>
						</div><!-- End Col -->			
						
						
						<div class="col-lg-3 col-md-4 col-sm-6 mix ftrd">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="assets/images/shop/5.jpg" alt="product image">
										<img class="pic-2" src="assets/images/shop/6.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="ti-zoom-in"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="ti-bag"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="ti-shopping-cart"></i></a></li>
									</ul>
									<span class="product-new-label">Sale</span>
								</div>
								<ul class="rating">
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
								</ul>
								<div class="product-content">
									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$16.00
										<span>$20.00</span>
									</div>
									<a class="add-to-cart" href="">+ Add To Cart</a>
								</div>
							</div>
						</div><!-- End Col -->			
						
						<div class="col-lg-3 col-md-4 col-sm-6 mix sale bslr">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="assets/images/shop/1.jpg" alt="product image">
										<img class="pic-2" src="assets/images/shop/2.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="ti-zoom-in"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="ti-bag"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="ti-shopping-cart"></i></a></li>
									</ul>
									<span class="product-new-label">-30%</span>
								</div>
								<ul class="rating">
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
								</ul>
								<div class="product-content">
									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$16.00
										<span>$20.00</span>
									</div>
									<a class="add-to-cart" href="">+ Add To Cart</a>
								</div>
							</div>
						</div><!-- End Col -->		
						
						<div class="col-lg-3 col-md-4 col-sm-6 mix sale bslr">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="assets/images/shop/7.jpg" alt="product image">
										<img class="pic-2" src="assets/images/shop/8.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="ti-zoom-in"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="ti-bag"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="ti-shopping-cart"></i></a></li>
									</ul>
									<span class="product-new-label">Sale</span>
								</div>
								<ul class="rating">
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
								</ul>
								<div class="product-content">
									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$16.00
										<span>$20.00</span>
									</div>
									<a class="add-to-cart" href="">+ Add To Cart</a>
								</div>
							</div>
						</div><!-- End Col -->	

						
						<div class="col-lg-3 col-md-4 col-sm-6 mix sale bslr">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="assets/images/shop/3.jpg" alt="product image">
										<img class="pic-2" src="assets/images/shop/4.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="ti-zoom-in"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="ti-bag"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="ti-shopping-cart"></i></a></li>
									</ul>
									<span class="product-new-label">-50%</span>
								</div>
								<ul class="rating">
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
								</ul>
								<div class="product-content">
									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$16.00
										<span>$20.00</span>
									</div>
									<a class="add-to-cart" href="">+ Add To Cart</a>
								</div>
							</div>
						</div><!-- End Col -->			
	
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End product Area -->	
											
	<x-footer />	
		
	<!-- Latest jQuery -->
		<script src="assets/js/jquery-1.12.4.min.js"></script>
	<!-- Latest compiled and minified Bootstrap -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>			
	<!-- owl-carousel min js  -->
		<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>	
	<!-- jquery.slicknav -->
		<script src="assets/js/jquery.slicknav.js"></script>			
	<!-- magnific-popup js -->               
		<script src="assets/js/jquery.magnific-popup.min.js"></script>		
	<!-- jquery mixitup min js -->
		<script src="assets/js/jquery.mixitup.js"></script>			
	<!-- scrolltopcontrol js -->
		<script src="assets/js/scrolltopcontrol.js"></script>	
	<!-- jquery purecounter vanilla js -->
		<script src="assets/js/purecounter_vanilla.js"></script>			
	<!-- WOW - Reveal Animations When You Scroll -->
		<script src="assets/js/wow.min.js"></script>				
	<!-- scripts js -->	
		<script src="assets/js/scripts.js"></script>
</body>
</html>