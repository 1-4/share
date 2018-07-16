@extends('frontend.layout')

@section('content')
<!-- Start contact-page Area -->
<section class="trainer-area section-gap" id="trainer">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center">
          <h1 class="mb-10">Staff</h1>
          <p></p>
        </div>
      </div>
    </div>						
    <div class="row justify-content-center d-flex align-items-center">
      @forelse($staffs as $staff)
        <div class="col-lg-3 col-md-6 single-trainer">
          <div class="thumb">
              <img class="img-fluid" src="{{ asset('img/staff/'.$staff->img_staff) }}" alt="">
          </div>
          <div class="meta-text mt-30 text-center">
            <h4>{{ $staff->full_name }}</h4>
            <p>{{ $staff->position }}</p>									    	
          </div>
        </div>
      @empty

      @endforelse
      
      																															
  
    </div>
  </div>	
</section>
<!-- End contact-page Area -->
@stop