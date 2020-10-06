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
Route::get( '/', 'SiteController@index')->name('main');
Route::post('reserve-table', 'TableReservationController@store')->name('reserve-table');
Route::get ('menu','MenuController@index')->name('menu');
Route::get('contact','FormPageController@index')->name('contact');
Route::post('contact_form', 'ContactController@store')->name('contact_form');
//Route::get('send', 'MailController@send')->name('send');
Route::get('/send-email', 'MailController@send');
