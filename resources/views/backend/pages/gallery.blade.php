@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{ $toptext }}
      <small>it all starts here</small>
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

    @if($errors->any())
    <div class="box">
      <div class="box-body text-red">        
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </div>
    </div>
    @endif
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">

        <div class="box-tools pull-right">
          
        </div>
      </div>
      <div class="box-body">
        <form id="gallery" role="form" method="post" action="{{ route('page-setting.galleryStore') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <label for="new_img">Upload new image</label>
          <input type="file" name="new_img">
        </form>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary" id="gallery-upload">Upload</button>
      </div>
      <div class="box-body">
        @forelse($gallerys as $gallery)
          <div class="col-md-3">
            <img src="{{ asset('img/gallery/'.$gallery->image) }}" alt="{{ $gallery->image }}" width="250px">
            <a href="{{ route('page-setting.galleryDestroy', $gallery->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
          </div>
        @empty

        @endforelse        
      </div class="text-center">
      <!-- /.box-body -->
      <div class="box-footer clearfix">
        {{ $gallerys->links() }}
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
  $('#gallery-upload').click(function(){
    $('#gallery').submit();
  });
</script>
@endsection
