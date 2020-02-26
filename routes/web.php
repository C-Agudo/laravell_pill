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

Route::get('/', 'MainController@home');

Route::get('/welcome', 'MainController@welcome');

Route::match(['get', 'post'], '/contact', 'MainController@contact');

// Route::post('/contact', );
