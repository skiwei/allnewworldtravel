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
					image : 'http://www.sayangholidays.com/images/photos/about-full.jpg'
				}]
			});
		})
	</script>	
@stop