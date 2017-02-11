<?php use App\Sayang\Libraries\Helper; ?>

@extends('layouts.fullscreen')

@section('content')
	<div class='alert alert-banner text-center'>
		<h1>CONTACT</h1>
	</div>
	
	<div class='row'>
		<div class='col-md-6'>
			<h2>Sayang Holidays</h2>
			<p>
				3545 Jamison Way<br>
				Castro Valley, CA 94546
			</p>
			<p>Phone: 1-888-472-9264<br>
				{!! Helper::spaces(12) !!}
				510-582-8800
			</p>
			<p>Email: <a href='mailto:sales@sayangholidays.com'>sales@sayangholidays.com</a></p>
			<p>California Seller Permit : 2074931-40</p>
		</div>
		<div class='col-md-6'>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.9346614196334!2d-122.0766961!3d37.6977335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f9225cab06679%3A0x5cc5f0d01fba4b0d!2s3545+Jamison+Way%2C+Castro+Valley%2C+CA+94546!5e0!3m2!1sen!2sus!4v1437675733489" width="100%" height="250" frameborder="0" style="border:0"></iframe>
		</div>
	</div>
	
	<hr>
	
	{!! Form::open(['method'=>'POST', 'route'=>['contact.store']]) !!}
		@include('layouts.partials.errors')
		<div class='row'>
			<div class='col-md-6'>
				<div class='form-group'>
					<label for='email'>Email:</label>
					<input type='email' name='email' class='form-control' value="{{ old('email') }}" required>
				</div>
				<div class='form-group'>
					<label for='name'>First Name:</label>
					<input type='text' name='firstname' class='form-control' value="{{ old('firstname') }}" required>
				</div>
				<div class='form-group'>
					<label for='lastname'>Last Name:</label>
					<input type='text' name='lastname' class='form-control' value="{{ old('lastname') }}" required>
				</div>
				<div class='form-group'>
					<label for='phone'>Phone:</label>
					<input type='text' name='phone' class='form-control' value="{{ old('phone') }}">
				</div>
				<div class='form-group'>
					<label for='inquiry'>Message:</label>
					<textarea name='inquiry' class='form-control' required>{{ old('inquiry') }}</textarea>
				</div>
			</div>
			<div class='col-md-6'>	
				@include('home.partials.mailingAddressForm')
			</div>
		</div>	
		<div class='form-group text-center'>
			<input type='submit' value='Submit' class='btn btn-primary btn-lg'>
		</div>
	{!! Form::close() !!}
@stop

@section('js')
	<script>
		$(function() {
			$.supersized({
				slides: [{
					image : '/images/photos/contact-full.jpg', 
					title : 'About Us'
				}]
			});
		})
	</script>
@stop