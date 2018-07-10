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
        <form id="account-setting" role="form" method="post" action="{{ route('account-setting.store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <!-- text input --> 
          <div class="form-group">
            <label>Full Name</label>
            <input value="{{ Auth::user()->name }}" name="name" type="text" class="form-control" placeholder="Full name">
          </div> 
          <div class="form-group">
            <label>Email</label>
            <input value="{{ Auth::user()->email }}" name="email" type="text" class="form-control" placeholder="email">
          </div> 
          <div class="form-group">
            <label>Password</label>
            <input value="" name="password" type="password" class="form-control" placeholder="password">
          </div>           
        </form>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary" id="account-setting-save">Save</button>
      </div>
      <!-- /.box-body -->
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
  $('#account-setting-save').click(function(){
    $('#account-setting').submit();
  });
</script>
@endsection
