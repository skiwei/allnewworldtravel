@extends('layouts.fullscreen')

@section('content')

	<h1 class='text-center'>
		Tours
	</h1>

	@include('tours.partials.tourlist')
	
@stop

@section('js')	
	<script>
		$(function() {
			$.supersized({
				slides: [{
					image : 'https://www.sayangholidays.net/images/photos/featured-full.jpg', 
					title : 'Featured Tours'
				}]
			});
		})
	</script>
@stop

