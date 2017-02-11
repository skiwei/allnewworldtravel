<?php 
$countryName = $country->country_name;
$countryCode = $country->country_code;
?>

@extends('layouts.fullscreen')

@section('content')	
	<h1 class='text-center'>
		{{ strtoupper($countryName) }}
	</h1>
	
	@include('tours.partials.tourlist')	
	
@stop

@section('js')
	<script>
		$(function() {
			$.supersized({
				slides: [{
					image : 'http://www.sayangholidays.com/images/destinations/thumbnails/{{$countryCode}}-thumbnail.jpg', 
					title : '{{$countryName}}'
				}]
			});
		})
	</script>
@stop