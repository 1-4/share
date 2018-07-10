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
          <div>
            <div class="has-feedback">
              @if (App\Inbox::count() > 0)
                {{ App\Inbox::count() }}
              @else
                0
              @endif
            </div>
          </div>
          <div class="box-tools pull-right">
            <a href="{{ route('inbox.deleteAll') }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete all</a>            
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          
          <div class="table-responsive mailbox-messages">
            <table class="table table-hover table-striped">
              <tbody>

              @forelse ($inboxs as $inbox)
                <tr>      
                  
                  @if($inbox->read == 1)
                    <td class="mailbox-name"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></td>
                  @else
                    <td class="mailbox-name"><i class="fa fa-envelope-o" aria-hidden="true"></i></td>
                  @endif                  

                  <td class="mailbox-name"><a href="{{ route('inbox.read',$inbox->id) }}">{{ $inbox->name }}</a></td>
                  <td class="mailbox-subject">
                  @if($inbox->read == 1)
                    {{ $inbox->subject }} 
                  @else
                    <b>{{ $inbox->subject }}</b>
                  @endif
                  
                   - {{ substr($inbox->message,0,50) }}...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">{{ $inbox->created_at }}</td>
                  <td class="mailbox-star"><a href="{{ route('inbox.delete', $inbox->id) }}"><i class="fa fa-trash text-red"></i></a></td>
                </tr>  
              @empty
                <tr>                                
                  <td class="mailbox-name"><a href="read-mail.html">-</a></td>
                  <td class="mailbox-subject"><b>-</b> - -
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">0</td>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-trash text-red"></i></a></td>
                </tr>
              @endforelse        
              </tbody>
            </table>
            <!-- /.table -->
          </div>
          <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
          <div class="pull-right">
            {{ $inboxs->links() }}
          </div>
          
        </div>
      </div>
      <!-- /. box -->
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
