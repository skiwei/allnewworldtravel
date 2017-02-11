<?php use App\AllNewWorld\Libraries\Helper; ?>

@if ($tours)
	@foreach ($tours as $tour)

		<div class="panel panel-default">
  			<div class="panel-body">
				<div class="row">
					<div class='col-md-2 hidden-xs'>
						<a href="{{ route('tours.show', $tour->id) }}">
							<img src='{{ Helper::thumbnailPhoto($tour->banner) }}' width='200'>
		  				</a>
		  			</div>
					<div class="col-md-7">
						<h3 class='tourlist-header'>
							<a href="{{ route('tours.show', $tour->id) }}">{{$tour->title}}</a> 
							<small>{{ $tour->days }} days</small>
						</h3>
						<div class='hidden-lg hidden-md hidden-sm'>
							<div class='pull-left' style='margin-right:10px'>
								<img src='{{ Helper::thumbnailPhoto($tour->banner) }}' width='100'>
							</div>
						</div>
						<div>
							<p>
								{{ str_limit($tour->description, 140) }}
							</p>
						</div>						
					</div>
					<div class='col-md-3'>
						<h3 class='tourlist-header'>
							Starting {{ Helper::currency($tour->starting_price) }}<br>
							<small>per person based on double occupancy.</small>
						</h3>
					</div>
				</div>
			</div>
		</div>
			
	@endforeach
@else
	<h3>No tours found</h3>
@endif