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

    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Inbox</h3>

          <div class="box-tools pull-right">
            <div class="has-feedback">
              <input type="text" class="form-control input-sm" placeholder="Search Mail">
              <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          
          <div class="table-responsive mailbox-messages">
            <table class="table table-hover table-striped">
              <tbody>
              <tr>                                
                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                </td>
                <td class="mailbox-attachment"></td>
                <td class="mailbox-date">5 mins ago</td>
                <td class="mailbox-star"><a href="#"><i class="fa fa-trash text-red"></i></a></td>
              </tr>              
              </tbody>
            </table>
            <!-- /.table -->
          </div>
          <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
          
        </div>
      </div>
      <!-- /. box -->
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
