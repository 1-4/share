@extends('frontend.layout')

@section('content')
<section class="offred-area section-gap">
  <div class="container">
    <div class="row section-title">
      <h1>We care about what we offer</h1>
      <p>Who are in extremely love with eco friendly system.</p>
    </div>					
    <div class="row">
      <div class="col-lg-4">
        <div class="single-offred">
          <img class="img-fluid" src="img/o1.jpg" alt="">
          <a href="#"><h4>Regular Exercise</h4></a>
          {{-- <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
          </p> --}}
        </div>
      </div>
      <div class="col-lg-4">
        <div class="single-offred">
          <img class="img-fluid" src="img/o2.jpg" alt="">
          <a href="#"><h4>Training on the go</h4></a>
          {{-- <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
          </p> --}}
        </div>
      </div>
      <div class="col-lg-4">
        <div class="single-offred">
          <img class="img-fluid" src="img/o3.jpg" alt="">
          <a href="#"><h4>Body Building Packages</h4></a>
          {{-- <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
          </p> --}}
        </div>
      </div>												
    </div>
  </div>	
</section>
@stop