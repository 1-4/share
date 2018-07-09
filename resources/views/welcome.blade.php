	<!DOCTYPE html>
	<html lang="zxx" class="no-js')}}">
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
			<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">							
			<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">			
			<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">			
			<link rel="stylesheet" href="{{asset('css/main.css')}}">

      <style>
        .banner-area {
          background: url(" {{ asset('img/banner-bg.jpg') }} ") right;
          background-size: cover;
        }
      </style>
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
				        		<a href="index.html"><img class="img-fluid" src="img/logo.png" alt="" title="" /></a>			
				  			</div>
				  			<div class="col-md-4 col-4 header-top-right no-padding">
				        		<a class="contact-texts" href="tel:{{ $site_config->phone_number }}">{{ $site_config->phone_number }}</a>
				        		<a href="tel:{{ $site_config->phone_number }}"><span class="lnr lnr-phone-handset"></span></a>
				  			</div>				  							  			
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-center">	
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							    <li class="menu-active"><a href="/">Home</a></li>
                                <li><a href="about">About</a></li>
                                <li><a href="services">Services</a></li>
                                <li><a href="trainers.html">Staff</a></li>						
                                <li><a href="trainers.html">News</a></li>
                                <li><a href="gallery">Gallery</a></li>
                                <li><a href="contact">Contact</a></li>
							</ul>
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-6 col-md-12 ">
							<h1 class="text-uppercase">
								{{ $site_config->top_text_banner }}		
							</h1>
							<p class="pt-10 pb-10 text-white">
								{{ $site_config->top_detail_text_banner }}	
							</p>							
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<!-- Start top-course Area -->
			<section class="top-course-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Top Courses That are being Offered</h1>
						<p>As you pour the first glass of your favorite Chianti</p>
					</div>	
					<div class="row">
						<div class="active-topcourse-carusel">
							<div class="single-carusel item">
								<div class="thumb">
									<img class="img-fluid" src="img/c1.jpg" alt="">
									<div class="join-btn"><a href="#">Join Now</a></div>
								</div>
								<div class="title-price d-flex justify-content-between">
									<a href="#">
										<h4>Target Specific Muscle</h4>
									</a>
									<h4 class="price">$275</h4>
								</div>
							</div>
							<div class="single-carusel item">
								<div class="thumb">
									<img class="img-fluid" src="img/c2.jpg" alt="">
									<div class="join-btn"><a href="#">Join Now</a></div>
								</div>
								<div class="title-price d-flex justify-content-between">
									<a href="#">
										<h4>Weightlifting</h4>
									</a>
									<h4 class="price">$200</h4>
								</div>
							</div>
							<div class="single-carusel item">
								<div class="thumb">
									<img class="img-fluid" src="img/c3.jpg" alt="">
									<div class="join-btn"><a href="#">Join Now</a></div>
								</div>
								<div class="title-price d-flex justify-content-between">
									<a href="#">
										<h4>Flex your muscle</h4>
									</a>
									<h4 class="price">$225</h4>
								</div>
							</div>	
							<div class="single-carusel item">
								<div class="thumb">
									<img class="img-fluid" src="img/c1.jpg" alt="">
									<div class="join-btn"><a href="#">Join Now</a></div>
								</div>
								<div class="title-price d-flex justify-content-between">
									<a href="#">
										<h4>Target Specific Muscle</h4>
									</a>
									<h4 class="price">$275</h4>
								</div>
							</div>
							<div class="single-carusel item">
								<div class="thumb">
									<img class="img-fluid" src="img/c2.jpg" alt="">
									<div class="join-btn"><a href="#">Join Now</a></div>
								</div>
								<div class="title-price d-flex justify-content-between">
									<a href="#">
										<h4>Weightlifting</h4>
									</a>
									<h4 class="price">$200</h4>
								</div>
							</div>
							<div class="single-carusel item">
								<div class="thumb">
									<img class="img-fluid" src="img/c3.jpg" alt="">
									<div class="join-btn"><a href="#">Join Now</a></div>
								</div>
								<div class="title-price d-flex justify-content-between">
									<a href="#">
										<h4>Flex your muscle</h4>
									</a>
									<h4 class="price">$225</h4>
								</div>
							</div>
							<div class="single-carusel item">
								<div class="thumb">
									<img class="img-fluid" src="img/c1.jpg" alt="">
									<div class="join-btn"><a href="#">Join Now</a></div>
								</div>
								<div class="title-price d-flex justify-content-between">
									<a href="#">
										<h4>Target Specific Muscle</h4>
									</a>
									<h4 class="price">$275</h4>
								</div>
							</div>
							<div class="single-carusel item">
								<div class="thumb">
									<img class="img-fluid" src="img/c2.jpg" alt="">
									<div class="join-btn"><a href="#">Join Now</a></div>
								</div>
								<div class="title-price d-flex justify-content-between">
									<a href="#">
										<h4>Weightlifting</h4>
									</a>
									<h4 class="price">$200</h4>
								</div>
							</div>
							<div class="single-carusel item">
								<div class="thumb">
									<img class="img-fluid" src="img/c3.jpg" alt="">
									<div class="join-btn"><a href="#">Join Now</a></div>
								</div>
								<div class="title-price d-flex justify-content-between">
									<a href="#">
										<h4>Flex your muscle</h4>
									</a>
									<h4 class="price">$225</h4>
								</div>
							</div>	
							<div class="single-carusel item">
								<div class="thumb">
									<img class="img-fluid" src="img/c1.jpg" alt="">
									<div class="join-btn"><a href="#">Join Now</a></div>
								</div>
								<div class="title-price d-flex justify-content-between">
									<a href="#">
										<h4>Target Specific Muscle</h4>
									</a>
									<h4 class="price">$275</h4>
								</div>
							</div>
							<div class="single-carusel item">
								<div class="thumb">
									<img class="img-fluid" src="img/c2.jpg" alt="">
									<div class="join-btn"><a href="#">Join Now</a></div>
								</div>
								<div class="title-price d-flex justify-content-between">
									<a href="#">
										<h4>Weightlifting</h4>
									</a>
									<h4 class="price">$200</h4>
								</div>
							</div>
							<div class="single-carusel item">
								<div class="thumb">
									<img class="img-fluid" src="img/c3.jpg" alt="">
									<div class="join-btn"><a href="#">Join Now</a></div>
								</div>
								<div class="title-price d-flex justify-content-between">
									<a href="#">
										<h4>Flex your muscle</h4>
									</a>
									<h4 class="price">$225</h4>
								</div>
							</div>																												
						</div>
					</div>
				</div>	
			</section>
			<!-- End top-course Area -->
			
			<!-- Start cta Area -->
			<section class="cta-area">
				<div class="container-fluid">
					<div class="row no-padding">
						<div class="col-lg-6 single-cta cta1 no-padding section-gap relative">
							<div class="overlay overlay-bg"></div>
							<h6 class=text-uppercase>Book an appointment</h6>
							<h1>Get into shape now</h1>
							<a href="#" class="primary-btn">Book Now</a>
						</div>
						<div class="col-lg-6 single-cta cta2 no-padding section-gap relative">
							<div class="overlay overlay-bg"></div>
							<h6 class=text-uppercase>Book an appointment</h6>
							<h1>Get into shape now</h1>
							<a href="#" class="primary-btn">Book Now</a>			
		
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta Area -->
			
			<!-- Start feature Area -->
			<section class="feature-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Our Topnotch Features</h1>
						<p>The city of southern California, san diego is locally</p>
					</div>						
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 feature-left">
							<img class="img-fluid" src="img/f.jpg" alt="">
						</div>
						<div class="col-lg-6 feature-right">
							<div class="single-feature">
								<h4>Smart Security</h4>
								<p>
									Growing up in Michigan, I was lucky enough to experience one part of the Great Lakes. And let me assure you, they are great. As a photojournalist.
								</p>
							</div>
							<div class="single-feature">
								<h4>Unlimited Colors</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
							</div>	
							<div class="single-feature">
								<h4>Endless Support</h4>
								<p>
									The diseases most commonly seen in travellers are diarrhoea, malaria if you travel in a malaria-infested area, accidents when travelling.     
								</p>
							</div>														
						</div>
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
			
			<!-- Start calculation Area -->
			<section class="aclculation-area section-gap relative">
				<div class="overlay overlay-bg"></div>				
				<div class="container">
					<div class="row section-title relative">
						<h1 class="text-white">Calculate Your Body Mass Index</h1>
						<p class="text-white">You love having a second home but the mortgage</p>
					</div>					
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-3 title-row">
							<p class="text-white">Your Height(inches)</p>
						</div>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="height" placeholder="Enter Value" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Value '" >
						</div>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="height" placeholder="Enter Value" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Value '" >
						</div>					
					</div>
					<div class="row justify-content-center align-items-center pt-30">
						<div class="col-lg-3 title-row">
							<p class="text-white">Your Weight(Ibs)</p>
						</div>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="height" placeholder="Enter Value" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Value '" >
						</div>
						<div class="col-lg-3">
							<a href="#" class="primary-btn">Calculate Your BMI</a>
						</div>							
					</div>
				</div>	
			</section>
			<!-- End calculation Area -->
			
			<!-- Start image-gallery Area -->
			<section class="image-gallery-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Image Gallery that we like to share</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>					
					<div class="row">
						<div class="col-lg-4 single-gallery">
							<a href="img/g1.jpg" class="img-gal"><img class="img-fluid" src="img/g1.jpg" alt=""></a>
							<a href="img/g4.jpg" class="img-gal"><img class="img-fluid" src="img/g4.jpg" alt=""></a>
						</div>	
						<div class="col-lg-4 single-gallery">
							<a href="img/g2.jpg" class="img-gal"><img class="img-fluid" src="img/g2.jpg" alt=""></a>
							<a href="img/g5.jpg" class="img-gal"><img class="img-fluid" src="img/g5.jpg" alt=""></a>						
						</div>	
						<div class="col-lg-4 single-gallery">
							<a href="img/g3.jpg" class="img-gal"><img class="img-fluid" src="img/g3.jpg" alt=""></a>
							<a href="img/g6.jpg" class="img-gal"><img class="img-fluid" src="img/g6.jpg" alt=""></a>
						</div>				
					</div>
				</div>	
			</section>
			<!-- End image-gallery Area -->

			<!-- Start testomial Area -->
			<section class="testomial-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Testimonial from our Clients</h1>
						<p>Las Vegas has more than 100,000 hotel rooms to choose from.</p>
					</div>					
					<div class="row">
						<div class="active-testimonial-carusel">
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Helena Phillips</h4>
								<p>
									CEO at Facebook
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its.
								</p>
								<h4>Cordelia Barton</h4>
								<p>
									CEO at Twitter
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet users visit dating websites.     	
								</p>
								<h4>Carrie Reese</h4>
								<p>
									CEO at Google
								</p>
							</div>	
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Helena Phillips</h4>
								<p>
									CEO at Facebook
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its.
								</p>
								<h4>Cordelia Barton</h4>
								<p>
									CEO at Twitter
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet users visit dating websites.     	
								</p>
								<h4>Carrie Reese</h4>
								<p>
									CEO at Google
								</p>
							</div>	
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Helena Phillips</h4>
								<p>
									CEO at Facebook
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its.
								</p>
								<h4>Cordelia Barton</h4>
								<p>
									CEO at Twitter
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet users visit dating websites.     	
								</p>
								<h4>Carrie Reese</h4>
								<p>
									CEO at Google
								</p>
							</div>																												
						</div>
					</div>
				</div>	
			</section>
			<!-- End testomial Area -->		

			<!-- Start brands Area -->
			<section class="brands-area">
			<div class="container no-padding">
			    <div class="brand-wrap">
			        <div class="row align-items-center active-brand-carusel justify-content-start no-gutters')}}">
			            <div class="col single-brand">
			                <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
			            </div>
			            <div class="col single-brand">
			                <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
			            </div>
			            <div class="col single-brand">
			                <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
			            </div>
			            <div class="col single-brand">
			                <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
			            </div>
			            <div class="col single-brand">
			                <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
			            </div>
			        </div>
			    </div>
			</div>
			</section>
			<!-- End brands Area -->

			<!-- Start callto Area -->
			<section class="callto-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row">
						<div class="call-wrap mx-auto">
							<h1>It's never late to start, join us today!</h1>
							<p>
								Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all.
							</p>
							<a href="#" class="primary-btn">Become a Member</a>				
						</div>
					</div>
				</div>	
			</section>
			<!-- End callto Area -->
											
			
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

			<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous')}}"></script>
			<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('js/easing.min.js')}}"></script>			
			<script src="{{asset('js/hoverIntent.js')}}"></script>
			<script src="{{asset('js/superfish.min.js')}}"></script>	
			<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>	
 			<script src="{{asset('js/jquery-ui.js')}}"></script>								
			<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>	
			<script src="{{asset('js/owl.carousel.min.js')}}"></script>									
			<script src="{{asset('js/mail-script.js')}}"></script>	
			<script src="{{asset('js/main.js')}}"></script>	
		</body>
	</html>