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

Route::get('/about', function () {
  echo 'info apie mane';
});

Route::get('/hello/{name?}', function($name = 'vartotojas') {
  echo 'Labas,' . $name;
});

Route::get('/gallery', 'GalleryController@showAll');

Route::resource('/products', 'ProductsController');
Route::resource('/categories', 'CategoriesController');
Route::get('/categories/{id}/products', 'CategoriesController@showProducts')->name('categotries.showProducts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
