@extends('layouts.fullscreen')

@section('content')
	<div class='alert alert-banner text-center'>
		<h1>
			Your Passport to the Loveliest Places on Earth
		</h1>
	</div>
	
	<p>Sayang Holidays, LLC is a full service tour operator that specializes in tours and vacation packages to Southeast Asia. Our experience and knowledge of the region assures you of the greatest travel value possible for your chosen destination. Our exclusive contracts with the world’s top airlines and the finest resorts allows us to give you the most complete array of travel options and the very best in travel value. Our vacation packages are designed to take you to the loveliest places on Earth.</p>
	<p>From one of the 7 wonders of the world in India, to the bustling cities of Bangkok, Thailand and Ho Chi Minh, Vietnam, to the serene and tranquil beaches of Bali, we cater to all your travel accommodations. And if we do not have what you like, we allow packages to be customized to your needs. Mix and match the loveliest places on Earth to suit your travel needs.</p>
	<p>Explore our website and begin your adventure now!!!</p>
	<p>
		<span class='glyphicon glyphicon-comment text-info'></span> 
		<a href="{{route('testimonials')}}">Testimonials</a>
	</p>	
@stop
	
@section('js')
	<script>
		$(function() {
			$.supersized({
				slides: [{
					image : '/images/photos/about-full.jpg', 
					title : 'About Us'
				}]
			});
		})
	</script>	
@stop