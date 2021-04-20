@extends('layouts.master')

@section('content')
         <div class=" col-md-10" role="main" style="background: #fff;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Change Password</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
					{{-- START ALERT BLOCK --}}
					@if(Session::has('successMessage'))
						<div class="alert alert-success" role="alert">
							<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							{!! html_entity_decode(session('successMessage')) !!}
						</div>
					@endif
					@if(Session::has('dangerMessage') || count($errors))
						<div class="alert alert-danger" role="alert">
							<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							{!! html_entity_decode(session('dangerMessage')) !!}
							{{ $errors->first() }}
						</div>
					@endif
					{{-- END ALERT BLOCK --}}
                  </div>
                  <div class="x_content">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
							{{ Form::open(['route' => 'admin-change-password', 'id' => 'changePassword']) }}
								<div class="form-group">
									{{ Form::label('old_password', 'Old Password*', ['class' => 'control-label']) }}
									{{ Form::password('old_password', ['id' => 'oldPassword', 'class' => 'form-control', 'placeholder' => 'Old Password*', 'tabindex' => '1']) }}
								</div>
								<div class="form-group">
									{{ Form::label('new_password', 'New Password*', ['class' => 'control-label']) }}
									{{ Form::password('new_password', ['id' => 'newPassword', 'class' => 'form-control', 'placeholder' => 'New Password*', 'tabindex' => '2']) }}
								</div>
								<div class="form-group">
									{{ Form::label('confirm_password', 'Confirm Password*', ['class' => 'control-label']) }}
									{{ Form::password('confirm_password', ['class' => 'form-control', 'placeholder' => 'Confirm Password*', 'tabindex' => '3']) }}
								</div>
								<div class="form-group">
									{{ Form::submit('Update', ['class' => 'btn btn-primary btn-block', 'tabindex' => '3']) }}
								</div>
							{{ Form::close() }}
						</div>
					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
