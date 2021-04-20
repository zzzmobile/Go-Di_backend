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
                <h3>Manage Business Cards</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="">
                  <div class="x_title">
  			      <a href="card_creater" style="color:white;">
                    <div class="btn btn-primary pull-right" style="border-radius:50px;">
                       <b>+</b>
                    </div>							
                  </a>
                  
                  	<form>
                  <select name="cat" class="form-control" style="width: 200px;"  onchange='this.form.submit()'>
                  	<option>Select category</option>
                  	@foreach($categories as $category)
                  	<option value="{{ $category->tempcat_id }}">	{{ $category->tempcat_name }}</option>
					@endforeach
                  </select>
              </form>
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
	.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
</style>

                  <div class="">
					<div class="">
							@php 
								
								$i = 0;
								
							@endphp
						  <div class=" col-md-12">
						  @forelse($template as $template_value)

	<div class="card col-md-3" style="padding: 0px; margin: 8px; width: 23%" >
    <img class="card-img-top" src="{{ $template_value->canvas_thumbnail }}" alt="Card image" style="width:100%; ">
    <div class="card-body" style="padding: 5px; border-top:1px solid #ccc; ">
      <h4 class="card-title">{{ $template_value->template_name }}</h4>
      <p class="card-text">{{ $template_value->category }}</p>

     {!! html_entity_decode(link_to_route('admin-del-temp', '<i class="fa fa-trash-o" aria-hidden="true"></i>', [$template_value->template_id], ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return check()', 'title' => 'Delete'])) !!}
    </div>
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
</script>
@endpush
