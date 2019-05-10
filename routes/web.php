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

Route::get('/','WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{blog}', 'BlogController@show')->name('blog.show');
Route::get('/category/{slug}', 'BlogController@cat')->name('blog.cat');
Route::get('/tag/{slug}', 'BlogController@tag')->name('blog.tag');
