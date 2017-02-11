<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>{{$pageTitle}}</title>
	@include('layouts.partials.meta')
	@include('layouts.partials.css')
	@include('layouts.partials.js')
	@yield('css')
</head>
<body>
	<div id='header'>
		@include('layouts.partials.header')
	</div>
	
	<div class='jumbotron-content'>		
		
		@yield('content')
		
	</div>

	<div id='footer'>
		@include('layouts.partials.footer')
	</div>
	
	@yield('js')
</body>
</html>
