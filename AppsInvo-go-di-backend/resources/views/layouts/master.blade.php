<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
		<title>Go-Di</title>
		{{-- META SECTION --}}
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- END META SECTION --}}
		
        {{ Html::favicon('favicon.png') }}
		
        {{-- CSS INCLUDE --}}
		{{ Html::style('vendors/bootstrap/dist/css/bootstrap.min.css') }}
		{{ Html::style('vendors/font-awesome/css/font-awesome.min.css') }}
		{{ Html::style('vendors/nprogress/nprogress.css') }}
		{{ Html::style('vendors/starrr/dist/starrr.css') }}
		{{ Html::style('build/css/custom.min.css') }} 
		@stack('css')
        {{-- END CSS INCLUDE --}}
		
		{{-- START THIS PAGE STYLE --}}
		@stack('cssCode')
		{{-- END THIS PAGE STYLE --}}
	</head>
    <body class="nav-md">
		<div class="container body">
			<div class="main_container">
				@include('layouts.master-sidebar')
				@include('layouts.master-header')
				@yield('content')
				
				<footer style="margin-left: 80%;">
				 
				</footer>
			</div>
        </div>
        
		{{-- START SCRIPTS --}}
		{{-- START PLUGINS --}}

{{ Html::script('vendors/jquery/dist/jquery.min.js') }}
		{{ Html::script('vendors/bootstrap/dist/js/bootstrap.min.js') }}
		{{ Html::script('vendors/fastclick/lib/fastclick.js') }}
		{{ Html::script('vendors/nprogress/nprogress.js') }}
		{{ Html::script('vendors/datatables.net/js/jquery.dataTables.min.js') }}
		{{ Html::script('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}
		{{ Html::script('vendors/moment/min/moment.min.js') }}
		{{ Html::script('vendors/bootstrap-daterangepicker/daterangepicker.js') }}
		{{ Html::script('build/js/custom.min.js') }}





		@stack('js')
        {{-- END PLUGINS --}}
		
		@stack('jsCode')
		{{-- END SCRIPTS --}}
    </body>
</html>