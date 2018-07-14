@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endsection

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{ $toptext }}      
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    @if($errors->any())
    <div class="box">
      <div class="box-body text-red">        
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </div>
    </div>
    @endif
    @if(session()->has('message'))
    <div class="box">
      <div class="box-body text-green">
        {{ session()->get('message') }}
      </div>
    </div>
    @endif
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">        
        <a href="{{ route('post.list') }}" class="btn btn-sm"><i class="fa fa-chevron-left"></i> Back</a>
        <div class="box-tools pull-right">
          
        </div>
      </div>
      <div class="box-body">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $toptext }}</h3>
          </div>          
          <!-- /.box-header -->
          <div class="box-body">
          <div class="form-group">
              <form id="save-about" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="img_cover">Cover Image</label>
                <input type="file" id="img_cover-save" name="img_cover">
                <input type="hidden" id="title-save" name="title" value="">
                <textarea style="display:none" name="content" id="content-save" cols="0" rows="0"></textarea>
              </form>
            </div>
            <div class="form-group">
              <input class="form-control" id="title" value="" placeholder="Title">
            </div>
            <div class="form-group">
                  <textarea id="compose-textarea" class="form-control" style="height: 300px">
                    
                  </textarea>
            </div>
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" id="save" class="btn btn-primary">Publish</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      <div class="box-footer">
        @if ($errors->has('title'))
          <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
          </span>
        @endif
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
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Page Script -->
<script>
  
    //Add text editor
    $("#compose-textarea").wysihtml5();
  

  $('#save').click(function(){    
    $('#title-save').val($('#title').val());
    $('#content-save').val($("#compose-textarea").val());
    setTimeout(function(){
      $('#save-about').submit();
    },400);
    
  })
</script>
@endsection