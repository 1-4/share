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
			<link rel="stylesheet" href="/css/linearicons.css">
			<link rel="stylesheet" href="/css/font-awesome.min.css">
			<link rel="stylesheet" href="/css/bootstrap.css">
			<link rel="stylesheet" href="/css/magnific-popup.css">
			<link rel="stylesheet" href="/css/nice-select.css">							
			<link rel="stylesheet" href="/css/animate.min.css">
			<link rel="stylesheet" href="/css/owl.carousel.css">			
			<link rel="stylesheet" href="/css/jquery-ui.css">			
			<link rel="stylesheet" href="/css/main.css">
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
			    @include('frontend.menu')
			  </header><!-- #header -->			  			
			
			<!-- Start post-content Area -->
			<section class="post-content-area" style="margin-top:120px">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
              @forelse($newss as $news)              
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">									
									<div class="user-details row">
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{ Carbon\Carbon::parse($news->created_at)->format('d-m-Y') }}</a> <span class="lnr lnr-calendar-full"></span></p>
										<p class="view col-lg-12 col-md-12 col-6"><a href="#">{{ $news->view }} Views</a> <span class="lnr lnr-eye"></span></p>
                    <p class="view col-lg-12 col-md-12 col-6"><a href="#">{{ Carbon\Carbon::parse($news->created_at)->diffForHumans() }}</a></p>
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="/news/img/{{ $news->img_cover }}" alt="">
									</div>
									<a class="posts-title" href="{{ route('frontend.newsdetail',$news->id) }}"><h3>{{ title_case($news->title) }}</h3></a>
									<p class="excert">
                  {!! str_replace(['<div>','</div>'],['',''],str_limit($news->content,150)) !!}
									</p>
									<a href="{{ route('frontend.newsdetail',$news->id) }}" class="primary-btn">View More</a>
								</div>
							</div>
              @empty

              @endforelse
              													
              <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                    <li class="page-item">
                      @if($newss->currentPage() == 1)                        

                      @else
                      <a href="{{ $newss->url($newss->currentPage()-1) }}" class="page-link" aria-label="Next">
                        <span aria-hidden="true">
                          <span class="lnr lnr-chevron-left"></span> Prev
                        </span>
                      </a>
                      @endif                        
                    </li>
                    <li class="page-item active"><a href="#" class="page-link">Page : {{ $newss->currentPage() }}</a></li>
                    <li class="page-item disable">                        
                      @if($newss->currentPage() == $newss->lastPage())                        

                      @else
                      <a href="{{ $newss->url($newss->currentPage()+1) }}" class="page-link" aria-label="Next">
                          <span aria-hidden="true">
                              Next <span class="lnr lnr-chevron-right"></span>
                          </span>
                      </a>
                      @endif
                    </li>
                </ul>                                
              </nav>
						</div>
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">																
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Lastes Posts</h4>
									<div class="popular-post-list">										
                    @forelse($new_post as $post)
                      <div class="single-post-list d-flex flex-row align-items-center">
                        <div class="details">
                          <a href="{{ route('frontend.newsdetail',$post->id) }}"><h6>{{ $post->title }}</h6></a>
                          <p>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                        </div>
                      </div>
                    @empty
                      
                    @endforelse
                  </div>																																		
								</div>
								<div class="single-sidebar-widget ads-widget">
									
								</div>
															
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->

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