<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('home', 'HomeController@index')->name('home');

Route::get('about', 'HomeController@abut')->name('about');

Route::get('contact', 'HomeController@contact')->name('contact');

Route::post('contact', 'HomeController@submitContact')->name('contact.submit');

Route::get('thankyou', 'HomeController@thankyou')->name('thankyou');

Route::get('featuredTours', 'ToursController@featuredTours')->name('featuredTours');

Route::get('tours/{tour}', 'ToursController@show')->name('tours.show');

Route::get('destinations', 'ToursController@destinations')->name('destinations');

Route::get('toursByCountry/{countryId}', 'ToursController@toursByCountry')->name('toursByCountry');
