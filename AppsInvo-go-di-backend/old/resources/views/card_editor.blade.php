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
            
<iframe src="{{env('card_url')}}admin" width="100%" height="700"></iframe>
            
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
