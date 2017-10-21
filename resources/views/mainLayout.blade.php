<!DOCTYPE html>
<html>
<head>
	<base href="{{ env('APP_URL') }}">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="css/app.css" />
	<script src="js/app.js"></script>
	@yield('headerScripts')
</head>
<body>
	<div class="container">
		<h1 class="page-header">@yield('title')</h1>
	</div>
	<div class="container">
		@yield('content')
	</div>
@yield('footerScripts')
</body>
</html>