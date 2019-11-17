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
Route::get('contact', 'HomeController@contact_create')->name('contact');
Route::post('contact/store', 'HomeController@contact_store')->name('contact.store');
Route::get('about', 'HomeController@about')->name('about');
Route::get('event', 'HomeController@event')->name('event');
Route::get('shop', 'HomeController@shop')->name('shop');
Route::get('formation', 'HomeController@formation')->name('formation');
Route::get('coaching', 'HomeController@coaching')->name('coaching');
Route::get('audio', 'HomeController@audio')->name('audio');
Route::get('video', 'HomeController@video')->name('video');
Route::get('book', 'HomeController@book')->name('book');
