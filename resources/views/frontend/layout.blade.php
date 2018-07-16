	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Fitness</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			  <header id="header">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row align-items-center justify-content-center">
				  			<div class="col-md-4 col-4 header-top-left no-padding">
				        		<a href="mailto:{{ $site_config->email }}"><span class="lnr lnr-location"></span></a>
				        		<a class="contact-texts" href="mailto:{{ $site_config->email }}">{{ $site_config->email }}</a>		
				  			</div>
				  			<div class="col-md-4 col-4 header-top-bottom no-padding">
				        		<a href="{{ route('frontend.index') }}"><img class="img-fluid" src="img/logo.png" alt="" title="" /></a>			
				  			</div>
				  			<div class="col-md-4 col-4 header-top-right no-padding">
				        		<a class="contact-texts" href="tel:{{ $site_config->phone_number }}">{{ $site_config->phone_number }}</a>
				        		<a href="tel:{{ $site_config->phone_number }}"><span class="lnr lnr-phone-handset"></span></a>
				  			</div>			  							  			
				  		</div>			  					
		  			</div>
				</div>
			    @include('frontend.menu')
			  </header><!-- #header -->
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								{{ $toptext }}			
							</h1>	
							<p class="text-white link-nav"><a href="{{ route('frontend.index') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> {{ $breadcrumb }}</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			@yield('content')

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					
					<div class="footer-bottom row align-items-center">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<a href="https://{{ $site_config->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://{{ $site_config->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://{{ $site_config->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
 			<script src="js/jquery-ui.js"></script>								
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>