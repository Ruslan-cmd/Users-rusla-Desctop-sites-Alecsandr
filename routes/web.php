<?php

use Illuminate\Support\Facades\Route;

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
Route::get( 'main_page', 'Main_PageController@index')->name('main_page');
Route::get( 'events', 'EventsController@index')->name('events');
Route::get ('menu_page','MenuController@index')->name('menu_page');
Route::post('button','ButtonController@index')->name('button');
Route::post('cart/add/{dish}', 'MenuController@addToCart')->name('cart.add');
Route::get('cart_page', 'CartController@index')->name('cart_page');

Route::get( '/', 'SiteController@index')->name('main');
Route::post('reserve-table', 'TableReservationController@store')->name('reserve-table');
Route::get ('menu','MenuController@index')->name('menu');
Route::get('contact','FormPageController@index')->name('contact');
Route::post('contact_form', 'ContactController@store')->name('contact_form');
Route::get('/send-email', 'MailController@send');
