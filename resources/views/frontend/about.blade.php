@extends('frontend.layout')

@section('content')
<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="container">
            <h3 class="text-heading">{{ $title }}</h3>
            <p class="sample-text">                
              {!! $content !!}
            </p>
        </div>
    </div>	
</section>
<!-- End contact-page Area -->
@stop