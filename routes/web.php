<?php

Route::get('/', 'HomeController@index');

Route::resource('admin/setting', 'Admin\SettingController');

Route::resource('admin/showtime', 'Admin\ShowtimeController');


Route::get('/admin/setsetting', 'Admin\SetsettingController@index')->name('index');
Route::post('/admin/setsetting', 'Admin\SetsettingController@index')->name('index');
/*
 * Admin Setting
 * */
Route::post('/admin/setting', 'Admin\SettingController@index')->name('index');
Route::get('/admin/setting', 'Admin\SettingController@index')->name('index');

Route::get('/admin/setting/create', 'Admin\SettingController@create')->name('create');
Route::post('/admin/setting/create', 'Admin\SettingController@create')->name('create');

Route::get('/admin/setting/update/{id}', 'Admin\SettingController@update')->name('update');
Route::post('/admin/setting/update/{id}', 'Admin\SettingController@update')->name('update');

Route::get('/admin/setting/delete/{id}', 'Admin\SettingController@delete')->name('index');
/*
 * Admin Category
 * */
Route::get('/admin/category', 'Admin\CategoryController@index')->name('index');

Route::get('/admin/category/create', 'Admin\CategoryController@create')->name('create');
Route::post('/admin/category/create', 'Admin\CategoryController@create')->name('create');

Route::get('/admin/category/update/{id}', 'Admin\CategoryController@update')->name('update');
Route::post('/admin/category/update/{id}', 'Admin\CategoryController@update')->name('update');

Route::get('/admin/category/delete/{id}', 'Admin\CategoryController@delete')->name('index');
/*
 * Admin Movie
 * */
Route::get('/admin/movie', 'Admin\MovieController@index')->name('index');

Route::get('/admin/movie/create', 'Admin\MovieController@create')->name('create');
Route::post('/admin/movie/create', 'Admin\MovieController@create')->name('create');

Route::get('/admin/movie/update/{id}', 'Admin\MovieController@update')->name('update');
Route::post('/admin/movie/update/{id}', 'Admin\MovieController@update')->name('update');

Route::get('/admin/movie/delete/{id}', 'Admin\MovieController@delete')->name('index');
/*
 * Admin Hall
 * */
Route::get('/admin/hall', 'Admin\HallController@index')->name('index');

Route::get('/admin/hall/create', 'Admin\HallController@create')->name('create');
Route::post('/admin/hall/create', 'Admin\HallController@create')->name('create');

Route::get('/admin/hall/update/{id}', 'Admin\HallController@update')->name('update');
Route::post('/admin/hall/update/{id}', 'Admin\HallController@update')->name('update');

Route::get('/admin/hall/delete/{id}', 'Admin\HallController@delete')->name('index');
/*
 * Admin Place
 * */
Route::get('/admin/place', 'Admin\PlaceController@index')->name('index');

Route::get('/admin/place/create', 'Admin\PlaceController@create')->name('create');
Route::post('/admin/place/create', 'Admin\PlaceController@create')->name('create');

Route::get('/admin/place/update/{id}', 'Admin\PlaceController@update')->name('update');
Route::post('/admin/place/update/{id}', 'Admin\PlaceController@update')->name('update');

Route::post('/admin/place/delete/{id}', 'Admin\PlaceController@delete')->name('index');
Route::get('/admin/place/delete/{id}', 'Admin\PlaceController@delete')->name('index');

Route::get('/genre/{id}', 'CategoryController@genre')->name('genre');

Route::get('/film/{id}', 'CategoryController@film')->name('film');

Route::get('/halls', 'HallController@index')->name('index');

Route::get('/hall/{id}', 'HallController@hall')->name('hall');

Route::get('/genre', 'CategoryController@index')->name('index');

Route::get('/search', 'SearchController@index')->name('index');
Route::post('/search', 'SearchController@index')->name('index');