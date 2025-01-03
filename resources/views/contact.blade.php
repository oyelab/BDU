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
	<div class="preloader">
		<div class="status">
			<div class="status-mes"></div>
		</div>
	</div>
	<!-- END PRELOADER -->
	
	<x-navbar />
							
	<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<h1>Get In Touch</h1>
					<ul>
						<li><a href="{{ route('home') }}">Home</a></li>
						<li> / Contact</li>
					</ul>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>	
	<!-- END SECTION TOP -->

		<!-- START ADDRESS -->
		<section class="address_area section-padding">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_address">
							<i class="ti-map"></i>
							<h4>Our Location</h4>
							<p>3481 Melrose Place, Beverly Hills <br /> CA 90210</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_address sabr">
							<i class="ti-mobile"></i>
							<h4>Telephone</h4>
							<p>(+1) 517 397 7100</p>
							<p>(+1) 411 315 8138</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_address">
							<i class="ti-email"></i>
							<h4>Send email</h4>
							<p>Info@example.com</p>
							<p>admin@example.com</p>
						</div>
					</div><!-- END COL -->			  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END ADDRESS -->	

		<!-- CONTACT -->
		<div id="contact" class="contact_area section-padding">
			<div class="container">
				<div class="section-title-two">
					<h2>Send your message.</h2>
				</div>				
				<div class="row">					
					<div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="contact">
							<form class="form" name="enq" method="post" action="#" onsubmit="return validation();">
								<div class="row">
									<div class="form-group col-md-6">
										<label for="">Name</label>
										<input type="text" name="name" class="form-control" required="required">
									</div>
									<div class="form-group col-md-6">
										<label for="">Your Email</label>
										<input type="email" name="email" class="form-control" required="required">
									</div>
									<div class="form-group col-md-12">
										<label for="">Your Subject</label>
										<input type="text" name="subject" class="form-control" required="required">
									</div>
									<div class="form-group col-md-12">
										<label for="">Your Message</label>
										<textarea rows="6" name="message" class="form-control" required="required"></textarea>
									</div>
									<div class="col-md-12 text-center">
										<button type="submit" value="Send message" name="submit" id="submitButton" class="btn_one" title="Submit Your Message!">Send Message</button>
									</div>
								</div>
							</form>
						</div>
					</div><!-- END COL  -->				
				</div><!-- END ROW -->				
			</div><!--- END CONTAINER -->
		</div>
		<!-- END CONTACT -->
		
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
	<!-- simple-text-rotator.min.js  -->
		<script src="assets/simple-text-rotator/js/jquery.simple-text-rotator.min.js"></script>		
	<!-- scrolltopcontrol js -->
		<script src="assets/js/scrolltopcontrol.js"></script>		
	<!-- WOW - Reveal Animations When You Scroll -->
		<script src="assets/js/wow.min.js"></script>				
	<!-- scripts js -->	
		<script src="assets/js/scripts.js"></script>				
</body>
</html>