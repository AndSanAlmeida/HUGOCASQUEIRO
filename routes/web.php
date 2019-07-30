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

Route::get('/', 'PublicPagesController@home');
Route::get('/about', 'PublicPagesController@about');
Route::get('/portfolio', 'PublicPagesController@portfolio');
Route::get('/contacts', 'PublicPagesController@contacts');