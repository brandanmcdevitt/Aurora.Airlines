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
    return view('pages.frontpage');
});

Route::get('/destinations', function () {
    return view('pages.destinations');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/FAQ', function () {
    return view('pages.other');
});

Route::get('/route-map', function () {
    return view('pages.other');
});

Route::get('/ATOL', function () {
    return view('pages.other');
});

Route::get('/privacy-policy', function () {
    return view('pages.other');
});

Route::get('/terms-conditions', function () {
    return view('pages.other');
});

Route::get('/cookies', function () {
    return view('pages.other');
});

Route::get('/baggage', function () {
    return view('pages.other');
});

Route::get('/transfers', function () {
    return view('pages.other');
});

Route::get('/zurich', function () {
    return view('pages.featured');
});

Route::get('/albuferia', function () {
    return view('pages.featured');
});

Route::get('/reykjavik', function () {
    return view('pages.featured');
});

Route::get('/deals', function () {
    return view('pages.other');
});

/*creating and testing the members only page */
Route::get('/member', function () {
    return view('pages.member-only');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
