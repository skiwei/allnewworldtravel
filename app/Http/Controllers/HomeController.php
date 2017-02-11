<?php

namespace App\Http\Controllers;

use App\AllNewWorld\Repositories\TourRepository;

class HomeController extends Controller
{
    public function index(TourRepository $tourRepository)
    {
    	$tours = $tourRepository->featuredTours(5);
    	
    	$countries = $tourRepository->getDestinations();
    	
    	$pageTitle = 'Welcome to New World Tours & Travel';
    	
    	return view('home.main', compact('pageTitle', 'tours', 'countries'));
    }
}
