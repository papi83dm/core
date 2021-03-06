<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/fluxbb/core/public/css/admin.css') }}" />
	<script type="text/javascript" src="{{ URL::asset('vendor/fluxbb/core/public/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/fluxbb/core/public/js/admin.js') }}"></script>
</head>

<body>

<div id="flux-admin">

	@include('fluxbb::admin.layout.header')

	@include('fluxbb::admin.layout.sidemenu')

	@include('fluxbb::admin.layout.menu')
	
	<div class="content">
		
		@yield('alerts')

		@yield('main')

	</div>

</div>

</body>
</html>
