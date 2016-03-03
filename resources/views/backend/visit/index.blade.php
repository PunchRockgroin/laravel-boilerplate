@extends('backend.layouts.master')

@section('title', app_name() .' | '. trans('visit.backend.sidebar.title') .' | '. trans('visit.backend.sidebar.index'))

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>{{ trans('visit.backend.admin.title') }} &raquo; {{ trans('visit.backend.admin.index') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box">
          <div class="box-header">
            <h3 class="box-title">Enter Visit ID or Session ID</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
              {!! Form::open( [ 'route' => 'admin.visit.find' ] ) !!}
              {!! Form::token() !!}
              <div class='input-group'>
                  {!! Form::text('visit_id', null, $attributes = array('class'=>'form-control input-lg', 'placeholder'=>'Enter visit ID or Session ID')) !!}
                  <span class="input-group-btn">
                    <button class="btn btn-lg btn-success" type="submit">Go!</button>
                  </span>
                  
              </div>
              <p class="help-block">You can find the Visit ID in the top right of the check-in sheet. You may also enter a Session ID, which will return the last visit for that Session ID.</p>
              {!! Form::close() !!}
          </div>
                
      </div>
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
             {!! $html->table(['class' => 'table responsive table-bordered table-striped', 'width' => '100%' ]) !!}
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection



@push('after-scripts-end')
<script>
    var pusher = new Pusher("{{ env('PUSHER_MAIN_AUTH_KEY',  'your-auth-key') }}", {
                        encrypted: true
                      });
</script>
    {!! $html->scripts() !!}
@endpush