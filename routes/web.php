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
Auth::routes();

Route::get('/', 'MainController@welcome');

Route::match(['get', 'post'], '/contact', 'MainController@contact');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/articles', 'MainController@articles');

Route::get('/articles/{slug}', 'MainController@article');

Route::post('/newArticle','MainController@newArticle');