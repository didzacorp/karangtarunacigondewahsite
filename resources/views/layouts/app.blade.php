<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('layouts.head')
</head>
<body class="theme-purple" id="body">
	<!-- Page Loader -->
	<div class="page-loader-wrapper">
    <div class="loader">
      <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('assets/images/loader.svg') }}" width="48" height="48" alt="Aero"></div>
      <p>Please wait...</p>
    </div>
	</div>
	@include('layouts.left_sidebar')
	<div id="content">
		@yield('content')
	</div>
	@include('layouts.script')
</body>
</html>