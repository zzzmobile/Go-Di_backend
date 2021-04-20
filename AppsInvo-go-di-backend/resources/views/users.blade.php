@extends('layouts.master')

@push('cssCode')
<style>
.clientTable{ 
	margin:20px auto;
	font-size:15px;
	font-weight: bold;
}

.clientTable tr td{
	padding: 4px;
	/* text-align: center; */
}
.nav-tabs li.active a{
	background-color: #41B3AB !important;
	color: #ffffff !important;
}
table td .btn{
	margin-right: 0px !important;
}
.text-right-width{
	text-align: right;
	width: 50%;
}
.profile-img{
	width: 150px;
    margin: 20px auto;
    border: 3px solid #000000;
    height: 150px;
}
</style>
@endpush

@section('content')
    <div class=" col-md-10" role="main" style="background: #fff;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   
					<div class="title_right">
						<div class="col-md-4 form-group"></div>
						<div class="col-md-8 form-group">
							

							{!! html_entity_decode(Form::button('Add New', ['class' => 'btn btn-primary addNew pull-right', 'title' => 'Add New'])) !!}
						</div>
					</div>
                  
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
                  <style type="text/css">
.dashbord{
	
	display: inline-block;
	background-color:#34495E;
	color:#fff;
	margin-top: 50px;  
	margin: 5px;
}
.iconp{
	font-size: 25px;
	padding:5px;
	width: 50px;
	height: 50px;
	border:1px solid #fff;
	border-radius:50%;
	margin-top:-25px;
	margin-bottom: px;
	background-color:#34495E;
}
.icon-section p{
	margin:0px;
	font-size: 20px;
	padding-bottom: 10px;
}
.detail-section{
	background-color: #2F4254;
	padding: 5px 0px;
}

.detail-section {
	color:#fff;
	text-decoration: none;
}
.dashbord-green .icon-section,.dashbord-green .icon-section i{
	background-color: #16A085;
}
.dashbord-green .detail-section{
	background-color: #149077;
}
.dashbord-orange .icon-section,.dashbord-orange .icon-section i{
	background-color: #F39C12;
}
.dashbord-orange .detail-section{
	background-color: #DA8C10;
}
.dashbord-blue .icon-section,.dashbord-blue .icon-section i{
	background-color: #2980B9;
}
.dashbord-blue .detail-section{
	background-color:#2573A6;
}
.dashbord-red .icon-section,.dashbord-red .icon-section i{
	background-color:#E74C3C;
}
.dashbord-red .detail-section{
	background-color:#CF4436;
}
.dashbord-skyblue .icon-section,.dashbord-skyblue .icon-section i{
	background-color:#8E44AD;
}
.dashbord-skyblue .detail-section{
	background-color:#803D9B;
}
                  </style>
                  <div class="x_content">


                  	


					<div class="">
							
						  <table class="table table-striped">
						  <thead>
							<tr>
							  <th>#</th>
							  <th>Name</th>
							  <th>Mobile</th>
							  <th>Email</th>
							  
							  <th>Action</th>
							</tr>
						  </thead>
						  <tbody>
						  	@php
							$i =0;
							
							@endphp
						  @forelse($users as $user)
							<tr>
							  <td>{{ $i = $i + 1 }}</td>
							  <td title="">
							  	<div class="user-profile">
									@if(is_null($user->image) || empty($user->image) || $user->image == 'null')
										<img src="images/user.png" alt="">
									@else
								
										@if((substr($user->image, 0, 7) == 'http://') || (substr($user->image, 0, 8) == 'https://'))
										<img src="{{ $user->image }}" alt="">
										@else
										<img src="storage/profile/{{ $user->image }}" alt="">
										@endif
									
										
									@endif
									{{ mb_strimwidth(urldecode($user->first_name), 0, 20, "...") }} {{ mb_strimwidth(urldecode($user->last_name), 0, 20, "...") }}
								</div>
							  </td>

							  <td title="">

							  	{{ $user->phone }}

							  	
							  </td>

							  <td>
							  	
{{ $user->email }}

							  </td>



							  @if(Request::get('user_type') == 'paid' || Request::get('user_type') == 'registered')
							  	<td title="{{ $user->device_token }}">
								  	{{ mb_strimwidth(urldecode($user->device_token), 0, 25, "...") }}
								</td>
							  	<td title="{{ date('jS M Y', strtotime($user->joining_date)) }}">
							  		{{ date('jS M Y', strtotime($user->joining_date)) }}
							  		
							  	</td>
							  	<td >
							  		{{ date('h:m:s', strtotime($user->created_at)) }}
							  	</td>
							  @endif
							  <!-- @if(Request::get('user_type') == 'paid')
							  	<td title="{{ date('jS M Y', strtotime($user->subscription_end_on)) }}">
							  		{{ date('jS M Y', strtotime($user->subscription_end_on)) }}
							  	</td>
							  @endif -->
							  <td>
							  
							  <a href="#" data-toggle="modal" data-target="#edit{{ $user->id }}" class="btn btn-primary btn-xs">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</a>
								
 <a href="#" data-toggle="modal" data-target="#view{{ $user->id }}" class="btn btn-primary btn-xs">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</a>




{{-- START ADD MODAL --}}
<div class="modal fade" id="view{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog modal-md" role="document" style="width: 800px;"> 
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="modalLabel">View Profile</h4>
			</div>

			<div class="modal-body">
				<center><div class="user-profile">
									@if(is_null($user->image) || empty($user->image) || $user->image == 'null')
										<img src="images/user.png" alt="" style="width: 120px; height: 120px;">
									@else
								
										@if((substr($user->image, 0, 7) == 'http://') || (substr($user->image, 0, 8) == 'https://'))
										<img src="{{ $user->image }}" alt="" style="width: 120px; height: 120px;">
										@else
										<img src="storage/profile/{{ $user->image }}" alt=""  style="width: 120px; height: 120px;">
										@endif
									
										
									@endif</div>
									<br/>
</center>


								
								<div class="col-md-6">
								<h3>User Detail</h3>

								<table class="table table-striped">
						  <tr>
						  	<td><b>First Name</b></td>
						  	<td>{{ mb_strimwidth(urldecode($user->first_name), 0, 20, "...") }} </td>
						  	 </tr>
						  	<tr>
						  	<td><b>Last Name</b></td>
						  	<td>{{ mb_strimwidth(urldecode($user->last_name), 0, 20, "...") }}</td>
						  
						  </tr>

						  <tr>
						  	<td><b>Email</b></td>
						  	<td>{{ $user->email }} </td>
						  	</tr>
						  	<tr>
						  	<td><b>Mobile No</b></td>
						  	<td>{{ $user->phone }}</td>
						  
						  </tr>

						   <tr>
						  	<td><b>Promo Code</b></td>
						  	<td>{{ $user->promo_code }} </td>
						  	</tr>
						  	


						  </table>	
									</div>


									<div class="col-md-6">
								<h3>Business Detail</h3>

								<table class="table table-striped">
						  <tr>
						  	<td><b>Business Name</b></td>
						  	<td>{{ $user->b_name }} </td>
						  	 </tr>
						  
						  <tr>
						  	<td><b>Business Email</b></td>
						  	<td>{{ $user->b_email }} </td>
						  	</tr>
						  	<tr>
						  	<td><b>Business Mobile No</b></td>
						  	<td>{{ $user->b_mobile }}</td>
						  
						  </tr>

						   <tr>
						  	<td><b>Business Logo</b></td>
						  	<td><div class="user-profile">
									@if(is_null($user->b_logo) || empty($user->b_logo) || $user->image == 'null')
										<img src="images/user.png" alt="" style="width: 50px; height: 50px;">
									@else
								
										
										<img src="storage/profile/{{ $user->b_logo }}" alt=""  style="width: 50px; height: 50px;">
										
									
										
									@endif</div></td>
						  	</tr>
						  	


						  </table>	
									</div>

<div class="col-md-12">
		<h3>Card Detail</h3>
	<table class="table table-striped">
						  <tr>
						  	<td><b>Card Created</b></td>
						  	<td>{{$user->users_card_count }} </td>
						  	<td><b>Card Purchased</b></td>
						  	<td>{{$user->user_purchase_count }} </td>
						  	 </tr>

						  	 <tr>
						  	<td><b> Rolodex Card</b></td>
						  	<td>{{$user->users_rolodex_count }} </td>
						  	<td><b>Favorite Card</b></td>
						  	<td>{{$user->users_fav_count }}</td>
						  	 </tr>
	</table>


</div>


									<div class="clearfix"></div>
								
			</div>
			
		</div>
	</div>
</div>
{{-- END ADD MODAL --}}
           



{{-- START ADD MODAL --}}
<div class="modal fade" id="edit{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="modalLabel">Edit</h4>
			</div>
			{{ Form::open(['route' => 'admin-edit-users', 'files' => 'true']) }}
			<div class="modal-body">
				<input type="hidden" name="id" value="{{ $user->id }}" class="form-control">
				<div class="form-group">
					{{ Form::label('first_name', 'First Name*', ['class' => 'form-control-label']) }}
					{{ Form::text('first_name', $user->first_name, ['id' => '', 'class' => 'form-control', 'placeholder' => 'First Name*', 'required' => 'required']) }}
				</div>
				<div class="form-group">
					{{ Form::label('last_name', 'Last Name*', ['class' => 'form-control-label']) }}
					{{ Form::text('last_name', $user->last_name, ['id' => '', 'class' => 'form-control', 'placeholder' => 'Last Name*', 'required' => 'required']) }}
				</div>
				
				<div class="form-group">
					{{ Form::label('phone', 'Mobile No*', ['class' => 'form-control-label']) }}
					{{ Form::text('phone', $user->phone, ['id' => '', 'class' => 'form-control', 'placeholder' => 'Mobile No*', 'required' => 'required']) }}
				</div>
				<div class="form-group">
					{{ Form::label('image', 'Image*', ['class' => 'form-control-label']) }}
					<input type="file" name="image" class="form-control">
				</div>

					
				
			</div>
			<div class="modal-footer">
					{{ Form::button('Close', ['class' => 'btn btn-secondary', 'data-dismiss' => 'modal']) }}
					{{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
{{-- END ADD MODAL --}}
           





								{!! html_entity_decode(link_to_route('admin-del-user', '<i class="fa fa-trash-o" aria-hidden="true"></i>', [$user->id], ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return check()', 'title' => 'Delete'])) !!}
								@if($user->isActive == '1')
									{!! html_entity_decode(link_to_route('admin-inactive-user', '<i class="fa fa-times" aria-hidden="true"></i>', [$user->id], ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return checkInActive()', 'title' => 'InActive'])) !!}
								@else
									{!! html_entity_decode(link_to_route('admin-active-user', '<i class="fa fa-check" aria-hidden="true"></i>', [$user->id], ['class' => 'btn btn-success btn-xs', 'onclick' => 'return checkActive()', 'title' => 'Active'])) !!}
								@endif

								
							  </td>
							</tr>
							@empty
							<tr>
								
									<td colspan="4" class="text-center">No Records Found</td>
							</tr>
							@endforelse
						  </tbody>
						  <tfoot>
							<tr>
								
								
								</td>
							</tr>
						</tfoot>
						</table>
						  
					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


{{-- START ADD MODAL --}}
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="modalLabel">Add New User</h4>
			</div>
			{{ Form::open(['route' => 'admin-add-users', 'files' => 'true']) }}
			<div class="modal-body">
				
				<div class="form-group">
					{{ Form::label('first_name', 'First Name*', ['class' => 'form-control-label']) }}
					{{ Form::text('first_name', '', ['id' => '', 'class' => 'form-control', 'placeholder' => 'First Name*', 'required' => 'required']) }}
				</div>
				<div class="form-group">
					{{ Form::label('last_name', 'Last Name*', ['class' => 'form-control-label']) }}
					{{ Form::text('last_name', '', ['id' => '', 'class' => 'form-control', 'placeholder' => 'Last Name*', 'required' => 'required']) }}
				</div>
				<div class="form-group">
					{{ Form::label('email', 'Email*', ['class' => 'form-control-label']) }}
					{{ Form::email('email', '', ['id' => '', 'class' => 'form-control', 'placeholder' => 'Email*', 'required' => 'required']) }}
				</div>
				<div class="form-group">
					{{ Form::label('phone', 'Mobile No*', ['class' => 'form-control-label']) }}
					{{ Form::text('phone', '', ['id' => '', 'class' => 'form-control', 'placeholder' => 'Mobile No*', 'required' => 'required']) }}
				</div>

				<div class="form-group">
					{{ Form::label('image', 'Image*', ['class' => 'form-control-label']) }}
					<input type="file" name="image" class="form-control">
					
				</div>

					
				
			</div>
			<div class="modal-footer">
					{{ Form::button('Close', ['class' => 'btn btn-secondary', 'data-dismiss' => 'modal']) }}
					{{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
{{-- END ADD MODAL --}}

@endsection


@push('jsCode')
<script>
$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': '{{ csrf_token() }}'
			}
		});

$(document).on('click', '.pagination li a', function(e){
	e.preventDefault();
	var url = $(this).attr('href');
	$('#searchForm').attr('action', url);
	console.log($('#searchForm').attr('action'));
	$('#searchForm').submit();
});


function checkInActive(){
	return confirm("Are you sure you want to Deactivate?");
}

function checkActive(){
	return confirm("Are you sure you want to Activate?");
}

function check(){
	return confirm("Are you sure you want to delete?");
}

$(document).ready(function(){
	disabledSearchBtn();
	
	$(document).on('change', '#searchForm select', function(){
		disabledSearchBtn();
	});
	
	$(document).on('keyup', '#searchForm input', function(){
		disabledSearchBtn();
	});
	
	function disabledSearchBtn(){
		var searchBtn = false;
		$('.filters').each(function(){
			if($(this).val() != ''){
				searchBtn = true;
				return true;
			}
		});
		
		if(searchBtn){
			$('#searchBtn').removeAttr('disabled');
		}
		else{
			$('#searchBtn').attr('disabled', true);
		}
	}
});

$(document).on('click', '.editCat', function (e){
		$('#catId').val($(this).data('id'));
		$('#catTitle').val($(this).data('title'));
		$('#price').val($(this).data('price'));
		$('#editModal').modal('show');
	});

$(document).on('click', '.addNew', function (e){
		$('#addModal').modal('show');
	});


</script>
@endpush
