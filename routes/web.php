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

//Uses PagesController to route around the system
Route::get('/','PagesController@index');
Route::get('/customer','PagesController@customer');
Route::get('/employee','PagesController@employee');
Route::get('/report','PagesController@report');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
