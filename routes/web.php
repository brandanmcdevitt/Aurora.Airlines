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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/destinations', function () {
    return view('pages.destinations');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/home', function () {
    return view('pages.home');
});
