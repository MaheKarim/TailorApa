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



Route::get('/','FrontendController@index')->name('homepage');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::post('/contact_post','ContactController@storey')->name('contact.send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
