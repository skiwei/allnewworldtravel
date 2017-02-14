@extends('layouts.fullscreen') 

@section('content')
	<h1 class='page-header text-center'>
		Thank You for Your Inquiry
	</h1>
	
	<div class='text-center'>
		<h4>We will get back to you as soon as possible.</h4>
	</div>
@stop 

@section('js')
	<script>
		$(function() {
			$.supersized({
				slides: [{
					image : 'http://www.sayangholidays.com/images/photos/contact-full.jpg'
				}]
			});
		})
	</script>
@stop
