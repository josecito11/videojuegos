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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductsController@index')->name('products');

Route::get('/products/create', 'ProductsController@create')->name('create');

Route::post('/products/store', 'ProductsController@store')->name('store');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/eventos', function () {
    return view('eventos');
})->name('eventos');
