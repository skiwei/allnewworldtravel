<?php 
use App\AllNewWorld\Libraries\Helper;
use App\AllNewWorld\Libraries\VO;
?>

@extends('layouts.fullscreen')

@section('css')
	<style>
		#tour-tabs { margin-top:15px; }
		.nav-tabs li { font-weight:bold; }
		.tab-content { 
			border:1px solid silver; 
			border-top:none; 
			padding:20px; 
			margin-bottom:15px;
		}
		.tab-content ul { margin-left:20px; }
		.tab-content table { border:1px solid silver; margin-bottom:10px; }
		.tab-content table td, th { padding:5px; }
	</style>
@stop

@section('content')
	
	<h1 class='tour-header'>
		{{$tour->title}} <small>{{$tour->days}} days</small>
	</h1>
	
	<!-- Photos -->
	<ul class='list-inline text-center'>
		@foreach ($tour->photos as $photo)
			<?php $thumbnailPhoto = Helper::thumbnailPhoto($photo->photo_id); ?>
			<li>
				<a href='{{$thumbnailPhoto}}' title='{{str_limit($tour->title, 35)}}' class='photos'>
					<img src='{{$thumbnailPhoto}}'  class='img-thumbnail' width='250'>
				</a>
			</li>
		@endforeach
	</ul>
		
	<div class='row'>
		<div class='col-md-8'>
			<br>
			<!-- Description -->
			{{$tour->description}}
			
			<!-- Tabs -->
			<div id='tour-tabs'>
				<ul class="nav nav-tabs" role="tablist">
					  <li class="active">
					  	<a href="#pricing" role="tab" data-toggle="tab">Pricing</a>
					  </li>
					  <li>
					  	<a href="#itinerary" role="tab" data-toggle="tab">Itinerary</a>
					  </li>
					  @if ($tour->inclusion)
					  	<li><a href="#inclusions" role="tab" data-toggle="tab">Inclusions</a></li>
					  @endif
					  @if ($tour->exclusion)
					  	<li><a href="#exclusions" role="tab" data-toggle="tab">Exclusions</a></li>
					  @endif
					  @if ($tour->accommodation)
					  	<li><a href="#accommodation" role="tab" data-toggle="tab">Accommodation</a></li>
					  @endif
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="pricing">
					  	{!! $tour->pricing !!}
					</div>
					<div class="tab-pane" id="itinerary">
					  	{!! $tour->itinerary !!}	
					</div>
					<div class="tab-pane" id="inclusions">
					  	{!! $tour->inclusion !!}		
					</div>
					<div class="tab-pane" id="exclusions">
					  	{!! $tour->exclusion !!}
					</div>
					<div class="tab-pane" id="accommodation">
					  	{!! $tour->accommodation !!}	
					</div>
				</div>
			</div>
		</div>
		<div class='col-md-4'>

			<!-- Price -->
			<h2>
				Starting {{Helper::currency($tour->starting_price)}}<br>
				<small class='tour-price-note'>per person based on double occupancy</small>
			</h2>
			<p><a href='#' class='btn btn-primary btn-lg'>Call {{ VO::COMPANY_PHONE }} for more info</a></p>
			<br>

			<div id='tour-map'></div>
		</div>
	</div>
	
	<p><a href='#' class='btn btn-primary btn-lg'>Call {{ VO::COMPANY_PHONE }} for more info</a></p>
@stop

@section('js')
	@include('layouts.partials.gmap3')	
	@include('layouts.partials.colorbox')
	<script>
		$(function() {
			$('.colorbox-ajax').colorbox({'width':500});
			
			$('.photos').colorbox({rel:'photos'});
			
			$.supersized({
				slides: [{
					image : '{{Helper::fullscreenPhoto($tour->banner)}}', 
					title : '{{$tour->title}}'
				}]
			});

			$('#tour-map').gmap3({
				marker:{
					values: [
						@foreach ($tour->countries as $i=>$country)
							{latLng:[{{$country->latitude}}, {{$country->longitude}}]},
						@endforeach
					]
				},
				map:{
					options:{
						center:[{{$country->latitude}}, {{$country->longitude}}],
						zoom:4,
						streetViewControl:false,
						zoomControl: true,
					    zoomControlOptions: {
					      style: google.maps.ZoomControlStyle.SMALL,
					      position: google.maps.ControlPosition.RIGHT_BOTTOM
					    },						
					   	scrollwheel:false
					}					
				}
			});
		});
	</script>
@stop