@extends('layouts.fullscreen')

@section('content')
	<div class='alert alert-banner text-center'>
		<h1>Thank You</h1>
	</div>
	
	<div class='text-center'>
		<h3>Thank you for the inquiry.</h3>
		<p>One of our travel specialists will contact you.</p>
	</div>
@stop

@section('js')	
	<script>
		$(function() {
			$.supersized({
				slides: [{
					image : '/images/photos/thank-you-full.jpg', 
					title : 'Thank You'
				}]
			});
		})
	</script>
@stop