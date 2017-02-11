<?php

namespace App\Http\Controllers;

use App\AllNewWorld\Repositories\TourRepository;

class ToursController extends Controller
{
    public function show(TourRepository $tourReposiroty, $tourId)
    {
    	$tour = $tourReposiroty->getTour($tourId);
    	
    	$pageTitle = $tour->title;
    	
    	return view('tours.show', compact('pageTitle', 'tour'));
    }
    
    public function destinations(TourRepository $tourRepository)
    {
    	$countries = $tourRepository->getDestinations();
    	
    	$pageTitle = 'Destinations';
    	 
    	return view('tours.destinations', compact('pageTitle', 'countries'));
    }
    
    public function toursByCountry(TourRepository $tourRepository, $countryId)
    {
    	$country = $tourRepository->getDestination($countryId);
    	
    	$tours = $tourRepository->getToursByCountry($countryId)->data;
    	
    	$pageTitle = 'Tours Packages';
    	
    	return view('tours.toursByCountry', compact('pageTitle', 'tours', 'country'));
    }
    
    public function featuredTours(TourRepository $tourRepository)
    {
    	$tours = $tourRepository->featuredTours(20);
    	
    	$pageTitle = 'Tours';
    	
    	return view('tours.featured', compact('pageTitle', 'tours'));
    }
}
