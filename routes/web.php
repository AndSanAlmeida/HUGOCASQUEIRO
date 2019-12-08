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
Route::group([
  'prefix' => '{locale}',
  'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setlocale'
], function () {

  Route::get('/', 'PublicPagesController@home');
  Route::get('/aboutUs', 'PublicPagesController@aboutUs');
  Route::get('/portfolio', 'PublicPagesController@portfolio');
  Route::get('/contacts', 'PublicPagesController@contacts');
  Auth::routes();

  Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/profile', 'DashboardController@profile')->name('profile');

    // ABOUT
    Route::get('/about-us', 'AboutController@index')->name('dashboard.about');
    Route::post('/about-us', 'AboutController@save')->name('dashboard.save-about');

    // MISSION
    Route::get('/mission', 'MissionController@index')->name('dashboard.mission');
    Route::post('/mission', 'MissionController@save')->name('dashboard.save-mission');


    // SLIDER
    Route::get('/slider', 'SliderController@index')->name('dashboard.slider');
    Route::get('/slider/{id}', 'SliderController@edit')->name('dashboard.slider-edit');
    Route::post('/slider', 'SliderController@save')->name('dashboard.save-slider');
  });
});
Route::get('/', function () {
  return redirect(app()->getLocale());
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
