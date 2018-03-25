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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('detail', 'DetailController');

Route::auth();

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

Route::get('user/routes', 'DetailController@test');

//Route::get('user/routes/{id}', 'DetailController@testshow');

Route::get('user/test','DetailController@testshow');

Route::get('/home', 'HomeController@index');
