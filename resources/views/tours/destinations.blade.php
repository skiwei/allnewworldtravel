@extends('layouts.default')

@section('content')

	<div class='container'>

		<h1 class='text-header text-center'>
			DESTINATIONS
		</h1>

		@include('tours.partials.countrylist', ['countries'=>$countries])
	</div>

@stop