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
    return view('index');
})->name('home');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/product-detail', function () {
    return view('product-detail');
})->name('product-detail');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function () {
	Route::get('/', function () {
	    return view('admin.index');
	})->name('admin');
});