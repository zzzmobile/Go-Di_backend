<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ Html::favicon('favicon.png') }}

<title>Go-Di</title>

	{{-- CSS INCLUDE --}}
	{{ Html::style('vendors/bootstrap/dist/css/bootstrap.min.css') }}
	{{ Html::style('vendors/font-awesome/css/font-awesome.min.css') }}
	{{ Html::style('vendors/nprogress/nprogress.css') }}
	{{ Html::style('vendors/animate.css/animate.min.css') }}
	{{ Html::style('build/css/custom.min.css') }}
	{{-- END CSS INCLUDE --}}
	
	{{-- START THIS PAGE STYLE --}}
	<style type="text/css">
		body{
			background-color: #2A3F54 !important;
			color: #ffffff !important;
		}
		.login_content{
			text-shadow: none !important;
		}
		.login_content form div a{
			color: #ffffff !important;
		}
	</style>
	@stack('cssCode')
	{{-- END THIS PAGE STYLE --}}
  </head>

  <body class="login" style="">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
			{{ Html::image(asset('images/logo/logo.png'), config('app.name'), ['width' => '200']) }}
			
			<div style="text-shadow: none !important">
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
			
			{{ Form::open(['route' => 'admin-login', 'id' => 'login']) }}
              <div>
				{{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail']) }}
              </div>
              <div>
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
              </div>
              <div>
				{{ Form::submit('Log in', ['class' => 'btn btn-default submit', 'style' => 'margin-left:0px !important;']) }}
                <a class="reset_pass" href="#" style="margin-right:0px !important" data-toggle="modal" data-target="#forgot">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p>©2017 All Rights Reserved.</p>
              </div>
            {{ Form::close() }}
          </section>
        </div>
      </div>
    </div>


    <!-- Modal -->
	<div id="forgot" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-md">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title" style="color: #000;">Forgot Password</h4>
	      </div>
	      <div class="modal-body" style="min-height: 265px; overflow-y: auto;">
	        <div>
	        	<div class="login_wrapper">
	        		<div class="animate form login_form">
	        		  <h4 style="color: #000;" class="text-center">Hello Admin, Please enter your registered email id to retrieve password.</h4>
			          <section class="login_content">
						<div>
							{{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail', 'style' => 'margin-top:10px;', 'id' => 'forgotEmail']) }}
							<span style="color: red;display: none;" class="pull-left" id="errorMsg"></span>
						</div>

						<div>
							{{ Form::submit('Submit', ['class' => 'btn btn-default pull-right forgot-submit', 'style' => 'margin-left:0px !important;margin-top:10px;']) }}
						</div>
					  </section>
					</div>
				</div>
            </div>
	      </div>
	    </div>
	  </div>
	</div>

	
	{{-- START SCRIPTS --}}
	{{-- START PLUGINS --}}
	{{ Html::script('vendors/jquery/dist/jquery.min.js') }}
	{{ Html::script('vendors/bootstrap/dist/js/bootstrap.min.js') }}
	@stack('js')
	{{-- END PLUGINS --}}
	
	@stack('jsCode')
	{{-- END SCRIPTS --}}

	<script type="text/javascript">
		$(document).on('click', '.forgot-submit', function(e){
			var email = $('#forgotEmail').val();
			$.ajax({
				context: this,
				url: '{{ route("admin-send-forgot-mail") }}',
				method: "post",
				data: {'email':email},
				success: function(result){
					if(result.errorCode == 1){
						$('#errorMsg').show();
						$('#errorMsg').html(result.errorMsg);
					}
					else{
						location.reload();
					}
				}
			});
		});
	</script>
  </body>
</html>
