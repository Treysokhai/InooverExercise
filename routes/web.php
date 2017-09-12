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

/*Login Module*/

// view dashboard
Route::get('/admin','adminController@index');

// view form create new account
Route::get('/create','adminController@create');

// view login form
Route::get('/','adminController@login');
Route::get('/login','adminController@login');

// process logout and clear session
Route::get('/logout','adminController@logout');

// post data of AddNewAccount
Route::post('/addNewAccount','adminController@addNewAccount');

// post data to login process
Route::post('/login','adminController@loginprocess');