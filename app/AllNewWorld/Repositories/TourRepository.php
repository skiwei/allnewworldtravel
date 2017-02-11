<?php
namespace App\AllNewWorld\Repositories;

use GuzzleHttp\Client;

class TourRepository
{
	private $client;
	
	public function __construct()
    {
    	$this->client = new Client(['base_uri'=>'http://www.sayangholidays.com/api/']);
    }
    
    public function featuredTours($limit)
    {
    	$res = $this->client->get('featuredTours/'.$limit);
    	
    	return json_decode($res->getBody());
    }
    
    public function getTour($tourId)
    {
    	$res = $this->client->get('tours/'.$tourId);
    	
    	return json_decode($res->getBody());
    }
    
    public function getDestinations()
    {
    	$res = $this->client->get('destinations');
    	 
    	return json_decode($res->getBody());
    }
    
    public function getDestination($countryId)
    {
    	$res = $this->client->get('destination/'.$countryId);
    	
    	return json_decode($res->getBody());
    }
    
    public function getToursByCountry($countryId)
    {
    	$res = $this->client->get('toursByCountry/'.$countryId);
    	 
    	return json_decode($res->getBody());
    }
}