<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title>{{ $title }}</title>
		<!-- Favicon -->
        <link href="{{ public_path().'/assets/images/favicon.png' }}" rel="shortcut icon">
		<!-- CSS -->
		<link href="{{ public_path().'/assets/plugins/bootstrap/bootstrap.min.css' }}" rel="stylesheet">
		<link href="{{ public_path().'/assets/plugins/owl-carousel/owl.carousel.min.css' }}" rel="stylesheet">
		<link href="{{ public_path().'/assets/plugins/owl-carousel/owl.theme.default.min.css' }}" rel="stylesheet">
		<link href="{{ public_path().'/assets/plugins/magnific-popup/magnific-popup.min.css' }}" rel="stylesheet">
		<link href="{{ public_path().'/assets/plugins/sal/sal.min.css' }}" rel="stylesheet">
		<link href="{{ public_path().'/assets/css/theme.css' }}" rel="stylesheet">
		<!-- Fonts/Icons -->
		<link href="{{ public_path().'/assets/plugins/bootstrap-icons/bootstrap-icons.css' }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
		<link href="{{ public_path().'/assets/plugins/font-awesome/css/all.css' }}" rel="stylesheet">
	</head>
	<body data-preloader="1">

		<!-- Page Scroll Progress -->
		<div class="page-progress-container">
			<div id="pageProgress" class="page-progress-bar page-progress-gradient-6"></div>
		</div>
		<!-- end Page Scroll Progress -->

		<!-- Header -->
		<div class="header sticky">
			<div class="container">
				<!-- Logo -->
				<div class="header-logo">
					<!-- 
					<img class="logo-dark" src="../assets/images/your-logo-dark.png" alt="">-->
					<img class="logo-dark" src="{{ public_path().'/assets/aams/aams-logo.png' }}" alt="Aams Global"> 
					
				</div>
				<!-- Menu -->
				<div class="header-menu">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="/">Home</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="/">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Study Destinations</a>
							<ul class="nav-dropdown">
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#"><span class="fi fi-us"></span>&nbsp;&nbsp;USA</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#"><span class="fi fi-gb"></span>&nbsp;&nbsp;UK</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#"><span class="fi fi-ca"></span>&nbsp;&nbsp;Canada</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#"><span class="fi fi-gr"></span>&nbsp;&nbsp;Germany</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#"><span class="fi fi-au"></span>&nbsp;&nbsp;Australia</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#"><span class="fi fi-nz"></span>&nbsp;&nbsp;New Zealand</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#"><span class="fi fi-ir"></span>&nbsp;&nbsp;Ireland</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#"><span class="fi fi-fr"></span>&nbsp;&nbsp;France</a></li>
							</ul>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="/">Find a Course</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="#">Our Services</a>
							<ul class="nav-dropdown">
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#">Care Worker Visa</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#">Chef Visa</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#">Visitng Visa</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#">Flight Booking</a></li>
							</ul>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="/">Contact Us</a>
						</li>
					</ul>
				</div>
				<!-- Menu Extra -->
				<div class="header-menu-extra">
					<ul class="list-inline">
						<li><a class="link-social-facebook" href="#"><i class="bi bi-facebook"></i></a></li>
						<li><a class="link-social-twitter" href="#"><i class="bi bi-twitter"></i></a></li>
						<li><a class="link-social-instagram" href="#"><i class="bi bi-instagram"></i></a></li>
					</ul>
				</div>
				<!-- Menu Toggle -->
				<button class="header-toggle">
					<span></span>
				</button>
			</div><!-- end container -->
		</div>
		<!-- end Header -->
		
		@yield("content")

		<footer>
			<div class="section-sm bg-dark">
				<div class="container">
					<div class="row g-4">
						<div class="col-6 col-sm-6 col-lg-3">
							<img class="logo-dark" src="{{ public_path().'/assets/aams/aams-logo.png' }}" alt="Aams Global">
						</div>
						<div class="col-6 col-sm-6 col-lg-3">
							<h6 class="font-small fw-medium uppercase">Top Destinations</h6>
							<ul class="list-dash animate-links">
								<li><a href="#">USA</a></li>
								<li><a href="#">UK</a></li>
								<li><a href="#">Canada</a></li>
								<li><a href="#">Germany</a></li>
								<li><a href="#">Ireland</a></li>
								<li><a href="#">Australia</a></li>
								<li><a href="#">New Zealand</a></li>
								<li><a href="#">France</a></li>
							</ul>
						</div>
						<div class="col-6 col-sm-6 col-lg-3">
							<h6 class="font-small fw-medium uppercase">Top Universities</h6>
							<ul class="list-dash animate-links">
								<li><a href="#">RMIT University</a></li>
								<li><a href="#">DEAKIN University</a></li>
								<li><a href="#">LA TROBE University</a></li>
								<li><a href="#">Centennial College</a></li>
								<li><a href="#">University of Greenwich</a></li>
								<li><a href="#">The Univeristy of Melbourne</a></li>
								<li><a href="#">Univeristy of Birmingham</a></li>
							</ul>
						</div>
						<div class="col-6 col-sm-6 col-lg-3">
							<h6 class="font-small fw-medium uppercase">Contact Info</h6>
							<ul class="list-unstyled">
								<li>121 King St, Melbourne VIC 3000</li>
								<li>contact@example.com</li>
								<li>+(123) 456 789 01</li>
							</ul>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
			<div class="bg-black py-4">	
				<div class="container">
					<div class="row align-items-center g-2 g-lg-3">
						<div class="col-12 col-md-6 text-center text-md-start">
							<p>&copy; {{ date('Y') }} Aams Global, All Rights Reserved.</p>
						</div>
						<div class="col-12 col-md-6 text-center text-md-end">
							<ul class="list-inline-sm">
								<li><a class="button-circle button-circle-sm button-circle-social-facebook" href="#"><i class="bi bi-facebook"></i></a></li>
								<li><a class="button-circle button-circle-sm button-circle-social-twitter" href="#"><i class="bi bi-twitter"></i></a></li>
								<li><a class="button-circle button-circle-sm button-circle-social-pinterest" href="#"><i class="bi bi-pinterest"></i></a></li>
								<li><a class="button-circle button-circle-sm button-circle-social-instagram" href="#"><i class="bi bi-instagram"></i></a></li>
							</ul>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
		</footer>

		<!-- Scroll to top button -->
		<div class="scrolltotop">
			<a class="button-circle button-circle-md button-circle-gradient-6" href="#"><i class="bi bi-arrow-up"></i></a>
		</div>
		<!-- end Scroll to top button -->

		<!-- ***** JAVASCRIPTS ***** -->
		<script src="{{ public_path().'/assets/plugins/jquery.min.js' }}"></script>
		<script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
		<script src="{{ public_path().'/assets/plugins/plugins.js' }}"></script>
		<script src="{{ public_path().'/assets/js/functions.js' }}"></script>
	</body>
</html>