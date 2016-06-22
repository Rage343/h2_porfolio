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


Route::group(['middlewre' => ['web']], function () {

  Route::get('/', [
    'uses' => 'HomeController@getHome',
    'as'   => 'home'
  ]);

  Route::post('/contact', [
    'uses' => 'HomeController@sendEmail',
    'as'   => 'contact'
  ]);



});
