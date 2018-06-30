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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');

Route::resources([
    'bookings' => 'BookingController',
    'provinces' => 'ProvinceController',
    'reviews' => 'ReviewController',
    'tours' => 'TourController',
    'tourimages' => 'TourImageController'
]);
Route::get('bookings/cancel/{booking_id?}', 'BookingController@cancel');
Route::get('bookings/complete/{booking_id?}', 'BookingController@complete');
Route::get('{province_id}/tours', 'ProvinceController@tours')->name('allTours');
Route::post('/', 'ProvinceController@find')->name('findProvince');