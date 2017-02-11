<div class='row text-center'>
	@foreach ($countries as $country)
		<div class='col-md-4'>
			<div class='thumbnail'>
				<a href='/toursByCountry/{{$country->id}}'>
					<img src='http://www.sayangholidays.com/images/destinations/thumbnails/{{$country->country_code}}-thumbnail.jpg'>
					<h4>{{ $country->country_name }}</h4>
				</a>
			</div>
		</div>
	@endforeach
</div>