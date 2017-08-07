<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'GalleryController@index' );
Route::get('/create', 'GalleryController@create');
Route::post('/store', ['uses'=>'GalleryController@store']);
Route::resource('/gallery/index', 'GalleryController@index');
Route::resource('/gallery/show/{id}', 'GalleryController@show');


