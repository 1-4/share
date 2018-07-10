@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{ $toptext }}
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    @if(session()->has('message'))
    <div class="box">
      <div class="box-body text-green">
        {{ session()->get('message') }}
      </div>
    </div>
    @endif
    <!-- Default box -->
    <div class="box">      
      <div class="box-body">
        <form id="site-config" role="form" method="post" action="{{ route('siteConfig.store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <!-- text input --> 
          <div class="box-header with-border">
            <h3 class="box-title"><u>General</u> :</h3>
          </div>
          <div class="form-group">
            <label>Logo</label>
            <input type="file" name="logo" class="form-control" placeholder="Logo">
            <br>
            <img src="{{ asset('img/logo.png') }}" alt="" width="150" srcset="">
            <span class="help-block">
              <strong>recomended image size ( 155px * 40px )</strong>
            </span>
          </div>
          <div class="form-group">
            <label>Top banner image</label>
            <input type="file" name="top_img_banner" class="form-control" placeholder="Top banner image">
            <br>
            <img src="{{ asset('img/banner-bg.jpg') }}" alt="" width="150" srcset="">
            <span class="help-block">
              <strong>recomended image size ( 1920px * 840px )</strong>
            </span>
          </div>
          <div class="form-group">
            <label>Top banner text</label>
            <input value="{{ $site_config->top_text_banner }}" name="top_text_banner" type="text" class="form-control" placeholder="Top banner text">
          </div> 
          <div class="form-group">
            <label>Top banner detail text</label>
            <textarea name="top_detail_text_banner" class="form-control" rows="3" placeholder="Top banner detail text">
              {{ $site_config->top_detail_text_banner }}
            </textarea>
          </div> 
          {{-- <div class="form-group">
            <label>Bottom banner image</label>
            <input type="text" class="form-control" placeholder="Bottom banner image">
          </div>
          <div class="form-group">
            <label>Bottom banner text</label>
            <input type="text" class="form-control" placeholder="Bottom banner text">
          </div> 
          <div class="form-group">
            <label>Bottom banner detail text</label>
            <input type="text" class="form-control" placeholder="Bottom banner detail text">
          </div>  --}}

          <div class="box-header with-border">
            <h3 class="box-title"><u>General information</u> :</h3>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input name="email" value="{{ $site_config->email }}" type="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <label>Phone number</label>
            <input name="phone_number" value="{{ $site_config->phone_number }}" type="text" class="form-control" placeholder="Phone number">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input name="address" value="{{ $site_config->address }}" type="text" class="form-control" placeholder="Address">
          </div>          

          <div class="box-header with-border">
            <h3 class="box-title"><u>Social media</u> :</h3>
          </div>
          <div class="form-group">
            <label>Facebook</label>
            <input name="facebook" value="{{ $site_config->facebook }}" type="text" class="form-control" placeholder="https://facebook.com/facebook_id">
          </div>          
          <div class="form-group">
            <label>Instragram</label>
            <input name="instagram" value="{{ $site_config->instagram }}" type="text" class="form-control" placeholder="https://instagram.com/instagram_id">
          </div>
          <div class="form-group">
            <label>Twitter</label>
            <input name="twitter" value="{{ $site_config->twitter }}" type="text" class="form-control" placeholder="https://twitter.com/twitter_id">
          </div>
        </form>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-primary" id="site-config-save">Save</button>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('js')
<script>
  $('#site-config-save').click(function(){
    $('#site-config').submit();
  });
</script>
@endsection
