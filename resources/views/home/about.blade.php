@extends('layouts.fullscreen')

@section('content')
	<h1 class='page-header text-center'>
		About Us
	</h1>
	
@stop
	
@section('js')
	<script>
		$(function() {
			$.supersized({
				slides: [{
					image : 'https://www.sayangholidays.net/images/photos/about-full.jpg'
				}]
			});
		})
	</script>	
@stop