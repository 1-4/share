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
            @forelse($gallerys as $gallery)
              <div class="col-lg-4 single-gallery">
                <a href="{{ asset('img/gallery/'.$gallery->image) }}" class="img-gal"><img class="img-fluid" src="{{ asset('img/gallery/'.$gallery->image) }}" alt=""></a> 
              </div>	
            @empty

            @endforelse			
        </div>
        <nav class="blog-pagination justify-content-center d-flex">
          <ul class="pagination">
              <li class="page-item">
                @if($gallerys->currentPage() == 1)                        

                @else
                <a href="{{ $gallerys->url($gallerys->currentPage()-1) }}" class="page-link" aria-label="Next">
                  <span aria-hidden="true">
                    <span class="lnr lnr-chevron-left"></span> Prev
                  </span>
                </a>
                @endif                        
              </li>
              <li class="page-item active"><a href="#" class="page-link">Page : {{ $gallerys->currentPage() }}</a></li>
              <li class="page-item disable">                        
                @if($gallerys->currentPage() == $gallerys->lastPage())                        

                @else
                <a href="{{ $gallerys->url($gallerys->currentPage()+1) }}" class="page-link" aria-label="Next">
                    <span aria-hidden="true">
                        Next <span class="lnr lnr-chevron-right"></span>
                    </span>
                </a>
                @endif
              </li>
          </ul>                                
        </nav>
    </div>	
</section>
<!-- End image-gallery Area -->
@stop