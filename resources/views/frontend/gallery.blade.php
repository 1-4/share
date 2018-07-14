@extends('frontend.layout')

@section('content')
<!-- Start image-gallery Area -->
<section class="image-gallery-area section-gap">
    <div class="container">
        <div class="row section-title">
            <h1>Image Gallery that we like to share</h1>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>					
        <div class="row">
            <div class="col-lg-4 single-gallery">
							<a href="img/gallery/g1.jpg" class="img-gal"><img class="img-fluid" src="img/gallery/g1.jpg" alt=""></a>
							<a href="img/gallery/g2.jpg" class="img-gal"><img class="img-fluid" src="img/gallery/g2.jpg" alt=""></a>
						</div>	
						<div class="col-lg-4 single-gallery">
							<a href="img/gallery/g3.jpg" class="img-gal"><img class="img-fluid" src="img/gallery/g3.jpg" alt=""></a>
							<a href="img/gallery/g4.jpg" class="img-gal"><img class="img-fluid" src="img/gallery/g4.jpg" alt=""></a>
						</div>	
						<div class="col-lg-4 single-gallery">
							<a href="img/gallery/g5.jpg" class="img-gal"><img class="img-fluid" src="img/gallery/g5.jpg" alt=""></a>
							<a href="img/gallery/g6.jpg" class="img-gal"><img class="img-fluid" src="img/gallery/g6.jpg" alt=""></a>
						</div>			
        </div>
    </div>	
</section>
<!-- End image-gallery Area -->
@stop