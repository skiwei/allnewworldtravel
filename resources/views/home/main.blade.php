<?php use App\AllNewWorld\Libraries\Helper; ?>

@extends('layouts.jumbotron')

@section('content')

<div id="carousel" class="carousel slide" data-ride="carousel" data-pause='false'>
	<!-- Indicators -->
	<ol class="carousel-indicators hidden-xs">
		<li data-target="#carousel" data-slide-to="0" class="active"></li>
		@for ($i = 1; $i < count($tours); $i++ )
			<li data-target="#carousel" data-slide-to="{{$i}}"></li>
		@endfor
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		@foreach ($tours as $i=>$tour)
			<div class="item @if ($i==0) active @endif">
				<?php 
					$tourId = $tour->id;
					$bannerPhoto = Helper::bannerPhoto($tour->banner);
				?>
				<a href="{{route('tours.show', $tourId)}}">
				    <img src='{{$bannerPhoto}}'>
					<div class="carousel-caption">
					    <h2 class='alert-banner'>
					    	{{$tour->title}} 
					    	<small class='text-white hidden-xs'>
					    		{{$tour->days}} days Starting {{Helper::currency($tour->starting_price)}}
					    	</small>
					    </h2>
					</div>
				</a>
			</div>	
		@endforeach
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
<br>

<div class='container'>
	<div class='hidden-xs'>
		@include('tours.partials.countrylist', ['countries'=>$countries])
	</div>

	<div class='hidden-sm hidden-md hidden-lg'>
		@include('tours.partials.tourlist', ['tours'=>$tours])
		<div class='text-center'>
			<a href="{{route('featuredTours')}}" class='btn btn-primary'>More</a>
		</div>
	</div>
</div>

@stop