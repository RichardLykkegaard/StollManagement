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

//Route::get('/','PagesController@index');
Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::Post('/login', function () {
    return 'input recieved';
});
Route::get('/customer', function () {
    return view('pages.customer');
});
Route::get('/employee', function () {
    return view('pages.employee');
});
Route::get('/report', function () {
    return view('pages.report');
});
Route::get('/playspace', function () {
    return view('pages.playspace');
});
/*
Route::get('/', function () {
    return view('index');
});

Route::get('/index','PagesController@index');
*/
