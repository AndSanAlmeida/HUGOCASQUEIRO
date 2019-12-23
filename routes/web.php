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

  Route::get('/', 'PublicPagesController@home')->name('home');
  Route::get('/aboutUs', 'PublicPagesController@aboutUs')->name('about');
  Route::get('/portfolio', 'PublicPagesController@portfolio')->name('portfolio');
  Route::get('/contacts', 'PublicPagesController@contacts')->name('contacts');
  Auth::routes();

  Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    // ABOUT
    Route::get('/about-us', 'AboutController@index')->name('dashboard.about');
    Route::post('/about-us', 'AboutController@save')->name('dashboard.save-about');

    // MISSION
    Route::get('/mission', 'MissionController@index')->name('dashboard.mission');
    Route::post('/mission', 'MissionController@save')->name('dashboard.save-mission');


    // SLIDER
    Route::get('/sliders', 'SliderController@index')->name('dashboard.sliders');
    Route::get('/new-slider', 'SliderController@new')->name('dashboard.new-slider');
    Route::get('/slider/{id}', 'SliderController@show')->name('dashboard.slider-edit');
    Route::post('/slider-post', 'SliderController@save')->name('dashboard.save-slider');
    Route::post('/slider/edit/{id}', 'SliderController@edit')->name('dashboard.update.slider');
    Route::get('/slider/{id}/delete', 'SliderController@delete')->name('dashboard.slider-delete');

    // SERVICES
    Route::get('/services', 'ServiceController@index')->name('dashboard.services');
    Route::get('/new-service', 'ServiceController@new')->name('dashboard.new-service');
    Route::get('/service/{id}', 'ServiceController@show')->name('dashboard.service-edit');
    Route::post('/service-post', 'ServiceController@save')->name('dashboard.save-service');
    Route::post('/service/edit/{id}', 'ServiceController@editService')->name('dashboard.update.service');
    Route::get('/service/{id}/delete', 'ServiceController@delete')->name('dashboard.service-delete');

    // COMMENTS
    Route::get('/comments', 'CommentController@index')->name('dashboard.comments');
    Route::get('/new-comment', 'CommentController@new')->name('dashboard.new-comment');
    Route::get('/comment/{id}', 'CommentController@edit')->name('dashboard.comment-edit');
    Route::post('/comment-post', 'CommentController@save')->name('dashboard.save-comment');
    Route::post('/comment/edit/{id}', 'CommentController@editComment')->name('dashboard.update.comment');
    Route::get('/comment/{id}/delete', 'CommentController@delete')->name('dashboard.comment-delete');

    // CATEGORIES
    Route::get('/categories', 'CategoryController@index')->name('dashboard.categories');
    Route::get('/new-category', 'CategoryController@new')->name('dashboard.new-category');
    Route::get('/category/{id}', 'CategoryController@show')->name('dashboard.category-edit');
    Route::post('/category-post', 'CategoryController@save')->name('dashboard.save-category');
    Route::post('/category/edit/{id}', 'CategoryController@edit')->name('dashboard.update-category');
    Route::get('/category/{id}/delete', 'CategoryController@delete')->name('dashboard.category-delete');

    // Projects
    Route::get('/projects', 'ProjectController@index')->name('dashboard.projects');
    Route::get('/new-project', 'ProjectController@create')->name('dashboard.new-project');
    Route::get('/project/{id}', 'ProjectController@show')->name('dashboard.project-edit');
    Route::post('/project-post', 'ProjectController@store')->name('dashboard.save-project');
    Route::post('/project/edit/{id}', 'ProjectController@edit')->name('dashboard.update-project');
    Route::get('/project/{id}/delete', 'ProjectController@destroy')->name('dashboard.project-delete');
  });
});
Route::get('/', function () {
  return redirect(app()->getLocale());
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
