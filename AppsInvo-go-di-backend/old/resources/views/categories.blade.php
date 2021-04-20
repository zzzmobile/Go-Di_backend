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
 <div class=" col-md-10" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Categories</h3>
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
							@php 
								
								$i = 0;
								
							@endphp
						  <div class=" col-md-12">
						  @forelse($categories as $category)

						  <div class="dashbord col-md-3">
								<center>
									<div class="icon-section">
									<div class="iconp" >{{ $category->temp }}</div>
									<br>
									<p>	{{ $category->tempcat_name }}</p>
									
									<p>${{ $category->price }}</p>
								</div>
							<div class="detail-section">
								{!! html_entity_decode(Form::button('<i class="fa fa-edit" aria-hidden="true"></i>', ['class' => 'btn btn-success editCat btn-xs', 'title' => 'Edit Category', 'data-id' => $category->tempcat_id, 'data-title' => $category->tempcat_name, 'data-price' => $category->price])) !!}

								{!! html_entity_decode(link_to_route('admin-del-category', '<i class="fa fa-trash-o" aria-hidden="true"></i>', [$category->tempcat_id], ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return check()', 'title' => 'Delete'])) !!}
								</div>
							</center>
						</div>

						
							@empty
							No Records Found
							
							@endforelse
						</div>
						  
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
				<h4 class="modal-title" id="modalLabel">Add New Category</h4>
			</div>
			{{ Form::open(['route' => 'admin-add-category', 'files' => 'true']) }}
			<div class="modal-body">
				
				<div class="form-group">
					{{ Form::label('category_name', 'Category Name*', ['class' => 'form-control-label']) }}
					{{ Form::text('category_name', '', ['id' => '', 'class' => 'form-control', 'placeholder' => 'Category Name*', 'required' => 'required']) }}
				</div>

					<div class="form-group">
					{{ Form::label('price', 'Price*', ['class' => 'form-control-label']) }}
					{{ Form::text('price', '', ['id' => '', 'class' => 'form-control', 'placeholder' => 'Price*', 'required' => 'required']) }}
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

{{-- START EDIT MODAL --}}
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="modalLabel"> Edit Category</h4>
			</div>
			{{ Form::open(['route' => 'admin-edit-category', 'files' => 'true']) }}
			{{ Form::hidden('id', '', ['id' => 'catId']) }}
			<div class="modal-body">
			
				<div class="form-group">
					{{ Form::label('category_name', 'Category Name*', ['class' => 'form-control-label']) }}
					{{ Form::text('category_name', '', ['id' => 'catTitle', 'class' => 'form-control', 'placeholder' => 'Category Name*', 'required' => 'required']) }}
				</div>

				<div class="form-group">
					{{ Form::label('price', 'Price*', ['class' => 'form-control-label']) }}
					{{ Form::text('price', '', ['id' => 'price', 'class' => 'form-control', 'placeholder' => 'Price*', 'required' => 'required']) }}
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
{{-- END EDIT MODAL --}}
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
