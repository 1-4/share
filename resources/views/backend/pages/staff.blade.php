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
        <form id="staff" role="form" method="post" action="{{ route('page-setting.staffStore') }}" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="form-group">
            <input class="form-control" name="full_name" id="full_name" value="" placeholder="Full name">
          </div>

          <div class="form-group">
            <input class="form-control" name="position" id="position" value="" placeholder="Position">
          </div>

          <label for="staff_img">Staff image</label>
          <input type="file" name="staff_img">
        </form>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary" id="add-new">Add new</button>
      </div>
      <!-- /.box-body -->
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

    <div class="box">
      <div class="box-header with-border">
        <h4>Staff list</h4>
        <div class="box-tools pull-right">
          
        </div>
      </div>
      <div class="box-body">
        @forelse($staffs as $staff)
          <div class="col-md-3 col-sm-12 col-xs-12">
            <img class="img-rounded responsive" src="{{ asset('img/staff/'.$staff->img_staff) }}" alt="{{ $staff->img_staff }}" width="250px">
            <div class="text-center">
              <p><b>Full name</b> : {{ $staff->full_name }}</p>
              <p><b>Position</b> : {{ $staff->position }}</p>
              <a href="{{ route('page-setting.staffDestroy', $staff->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
            </div>                        
          </div>
        @empty

        @endforelse
      </div>
      <div class="box-footer clearfix">
        {{ $staffs->links() }}
      </div>
    </div>
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('js')
<script>
  $('#add-new').click(function(){
    $('#staff').submit();
  });
</script>
@endsection
