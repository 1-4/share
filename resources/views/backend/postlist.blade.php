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
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>
      </div>
      <div class="box-body">
        <a class="btn btn-success btn-sm" href="{{ route('post.index') }}">New Post</a>
        <br><br>
        <table class="table table-bordered">
          <tr>            
            <th>Title</th>
            <th style="width: 200px">Date</th>
            <th style="width: 100px">Action</th>
          </tr>
          @forelse($newss as $news)
            <tr>
              <td>
                <a href="{{ route('post.edit',$news->id) }}">{{ $news->title }}</a>
              </td>
              <td align="center">
                {{ $news->created_at }}
              </td>
              <td>
                <a href="{{ route('frontend.newsdetail',$news->id) }}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
              </td>  
            </tr>
          @empty
            <tr>
              <td>-</td>
              <td>-</td>            
            </tr>
          @endforelse
          
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix">
        {{ $newss->links() }}
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
