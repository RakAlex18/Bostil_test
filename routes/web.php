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
Route::get('/', 'HomeController@index')->name('main.page');
Route::get('/forget', 'ProductController@destroy')->name('destroy');
Route::get('/basket', 'ProductController@showCart')->name('basket');
Route::get('/reduce-by-one/{id}', 'ProductController@reduceByOne')->name('reduce.by.one');
Route::get('/increase-by-one/{id}', 'ProductController@increaseByOne')->name('increase.by.one');
Route::get('/delete/{id}', 'ProductController@delete')->name('delete.product');
//когда строка 'add.to.cart' была ниже роута 'product.page' выдавало ошибку - нет такой страницы
Route::get('/get-add-to-cart/{id}', 'ProductController@getAddToCart')->name('add.to.cart');
Route::get('/{slug}', 'PageController@index')->name('index.page');
Route::get('/{slug}/{name}', 'ProductController@index')->name('product.page');

