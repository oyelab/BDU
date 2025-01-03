<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- SITE TITLE -->
		<title>BDU - An Edu Platform by Oyelab</title>		
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Our platform offers diverse courses, expert guidance, and cutting-edge resources designed to help you excel in your academic and professional journey. Join us in building a brighter future, one learner at a time.">
		<meta name="keywords" content="oyelab_project, college, course, e-learning, education, high school, kids, learning, online, online courses, school, student, teacher, tutor, university">
		<meta name="author" content="theme_ocean">
		<meta property="og:image" content="{{ asset('assets/images/banner/og-preview.jpg') }}" />
	
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
</head>
<body>
	
	<!-- Conditionally include the topbar based on the section -->
	@if(Route::is('home'))  <!-- Example route check -->
        <x-topbar />
    @endif
	
	<x-navbar />
								
	@yield('content')
	
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