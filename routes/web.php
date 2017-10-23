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

Route::get('/', [
	'uses' => 'FoodController@index',
   'as' => 'home'
]);

Route::get('/foods/{string}', [
	'uses' => 'FoodController@getFoodsSection',
   'as' => 'section.foods'
]);