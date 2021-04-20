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
           <div class=" col-md-10" role="main" style="background: #fff;    padding: 0px;">
          <div class="">
          @if(Request::has('design'))
          <iframe src="{{env('card_url')}}tshirtecommerce/?design={{ $_GET['design'] }}&cat_id=<?php echo $_GET['cat_id']?>&id=<?php echo $_GET['id']?>&name=<?php echo $_GET['name']?>&card_type=<?php echo $_GET['card_type']?>&price=<?php echo $_GET['price']?>&color=<?php echo $_GET['color']?>&back_background_color=<?php echo $_GET['back_background_color']?>" width="100%" height="600"></iframe>
          @else  
<iframe src="{{env('card_url')}}tshirtecommerce/" width="100%" height="600"></iframe>
@endif
            
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
