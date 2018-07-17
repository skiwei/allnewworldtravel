<?php 
use App\AllNewWorld\Libraries\VO;

?>

@extends('layouts.fullscreen')
 
@section('content')
    <div class="text-center">
        <h1 class=' page-header'>
            {{ VO::COMPANY_NAME }}
        </h1>        
        <p>
            {{ VO::COMPANY_ADDRESS }}<br> {{ VO::COMPANY_CITY }}, {{ VO::COMPANY_STATE }} {{ VO::COMPANY_ZIPCODE }}
        </p>
        <p>Phone: {{ VO::COMPANY_PHONE }}</p>
        <p>
            Email: <a href='mailto:{{ VO::COMPANY_EMAIL }}'>{{ VO::COMPANY_EMAIL }}</a>
        </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.120492934873!2d-122.42070168468207!3d37.78721587975713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809407e383a1%3A0x57981550fd5a602a!2s1015+Larkin+St%2C+San+Francisco%2C+CA+94109!5e0!3m2!1sen!2sus!4v1487099017679" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
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
