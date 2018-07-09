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
      <small>it all starts here</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">        

        <div class="box-tools pull-right">
          
        </div>
      </div>
      <div class="box-body">
        <div class="box-header with-border">
            <h3 class="box-title">Edit About Page</h3>
          </div>          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="form-group">
              <input class="form-control" id="title" value="{{ $title }}" placeholder="Title">
            </div>
            <div class="form-group">
                  <textarea id="compose-textarea" class="form-control" style="height: 300px">
                    {{ $content }}
                  </textarea>
            </div>
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" id="save" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Save</button>
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
    <form id="save-about" action="{{ route('page-setting.aboutStore') }}" method="post" style="display:none">
      {{ csrf_field() }}
      <input type="text" id="title-save" name="title" value="">
      <textarea name="content" id="content-save" cols="30" rows="10"></textarea>
    </form>
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
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });

  $('#save').click(function(){    
    $('#title-save').val($('#title').val());
    $('#content-save').val($("#compose-textarea").val());
    setTimeout(function(){
      $('#save-about').submit();
    },400)
    
  })
</script>
@endsection