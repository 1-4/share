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

    <!-- Default box -->
    <div class="box">      
      <div class="box-body">
        <form id="site-config" role="form" method="post" action="{{ route('siteConfig.store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <!-- text input -->
          <div class="box-header with-border">
            <h3 class="box-title"><u>Site</u> :</h3>
          </div>
          <div class="form-group">
            <label>Logo</label>
            <input type="file" name="logo" class="form-control" placeholder="Logo">
          </div>
          <div class="form-group">
            <label>Top banner image</label>
            <input type="text" class="form-control" placeholder="Top banner image">
          </div>
          <div class="form-group">
            <label>Top banner text</label>
            <input type="text" class="form-control" placeholder="Top banner text">
          </div> 
          <div class="form-group">
            <label>Top banner detail text</label>
            <input type="text" class="form-control" placeholder="Top banner detail text">
          </div> 
          <div class="form-group">
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
          </div> 

          <div class="box-header with-border">
            <h3 class="box-title"><u>General information</u> :</h3>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <label>Phone number</label>
            <input type="text" class="form-control" placeholder="Phone number">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Address">
          </div>          

          <div class="box-header with-border">
            <h3 class="box-title"><u>Social media</u> :</h3>
          </div>
          <div class="form-group">
            <label>Facebook</label>
            <input type="text" class="form-control" placeholder="https://facebook.com/facebook_id">
          </div>          
          <div class="form-group">
            <label>Instragram</label>
            <input type="text" class="form-control" placeholder="https://instagram.com/instagram_id">
          </div>
          <div class="form-group">
            <label>Twitter</label>
            <input type="text" class="form-control" placeholder="https://twitter.com/twitter_id">
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
