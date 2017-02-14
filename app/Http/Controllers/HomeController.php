<?php

namespace App\Http\Controllers;

use App\AllNewWorld\Repositories\TourRepository;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\AllNewWorld\Libraries\VO;

class HomeController extends Controller
{
    public function index(TourRepository $tourRepository)
    {
    	$tours = $tourRepository->featuredTours(5);
    	
    	$countries = $tourRepository->getDestinations();
    	
    	$pageTitle = 'Welcome to New World Tours & Travel';
    	
    	return view('home.main', compact('pageTitle', 'tours', 'countries'));
    }
    
    public function contact()
    {
    	$pageTitle = 'Contact';
    	
    	return view('home.contact', compact('pageTitle'));
    }
    
    public function submitContact(ContactRequest $request)
    {
    	\Mail::to(VO::COMPANY_EMAIL, VO::COMPANY_NAME)
    		->bcc('skiwei@gmail.com')
    		->send(new ContactMail($request->all()));
    	
    	return redirect()->route('thankyou');
    }
    
    public function thankyou()
    {
    	$pageTitle = 'Thank You';
    	
    	return view('home.thankyou', compact('pageTitle'));
    }
}
