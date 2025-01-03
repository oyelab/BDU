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
					<h1>Login Page</h1>
					<ul>
						<li><a href="{{ route('home') }}">Home</a></li>
						<li> / Login Page</li>
					</ul>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>	
	<!-- END SECTION TOP -->

	<!-- START LOGIN -->
	<section class="login_register section-padding">
		<div class="container">
			<div class="row">				
				<div class="col-lg-6 offset-lg-3 col-xs-12">
					<div class="login">
						<h4 class="login_register_title">Already a member? Sign in:</h4>
						<div class="form-group">
							<label for="">Username</label>
							<input type="text" id="contact-name" class=" form-control requiredField input-label" name="name">
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" id="contact-email" class="form-control requiredField input-label" name="password" >
						</div>
						<div class="form-group col-lg-12">
							<button class="btn_one" type="submit" name="submit">login</button>
						</div>
						<p>Don't have an account? <a href="register.html">Register Now</a></p>
					</div>
				</div><!--- END COL -->	
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END LOGIN -->
			

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