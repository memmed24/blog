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




// Authentication Routes...
Route::get('/{lang}/login', ['middleware' => ['logincheck'], 'uses' => 'Auth\LoginController@showLoginForm'])->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['middleware' => 'login'], function(){
  Route::get('/admin', 'AdminController@index');
  Route::get('/admin/remove/{id}', 'AdminController@remove');
  Route::post('/admin/update/', 'AdminController@update');
  Route::post('/admin/create', 'AdminController@create');
  Route::get('/admin/news', 'NewsController@index');
  Route::post('/admin/news', 'NewsController@create');
  Route::post('/admin/news/update', 'NewsController@update');
  Route::post('/admin/news/active', 'NewsController@active');
  Route::get('/admin/news/delete/{id}', 'NewsController@delete');
  Route::get('/admin/gallery', 'AdminController@gallery');
  Route::post('/admin/gallery/create', 'GalleryController@create');
  Route::get('/admin/gallery/delete/{id}', 'GalleryController@delete');
  Route::post('/admin/gallery/update', 'GalleryController@update');
  Route::post('/admin/gallery/active', 'GalleryController@disable');
  Route::get('/admin/files', 'FileController@index');
  Route::post('/admin/files', 'FileController@create');
  Route::get('/admin/files/remove/{id}', 'FileController@remove');
});
Route::get('/', function(){
  return redirect('/az');
});

Route::group(['middleware' => 'lang'], function(){
  Route::get('/{lang}/', ['middleware' => ['lang'], 'uses' => 'HomeController@index']);
  Route::get('/{lang}/about', 'HomeController@about');
  Route::get('/{lang}/mission', 'HomeController@mission');
  Route::get('/{lang}/shipping', 'HomeController@shipping');
  Route::get('/{lang}/railway', 'HomeController@railway');
  Route::get('/{lang}/auto', 'HomeController@auto');
  Route::get('/{lang}/door-to-door', 'HomeController@door');
  Route::get('/{lang}/multi-modal', 'HomeController@multi');
  Route::get('/{lang}/contact', 'HomeController@contact');
  Route::get('/{lang}/comingsoon', 'HomeController@soon');
  Route::get('/{lang}/container', 'HomeController@container');
  Route::get('/{lang}/train', 'HomeController@train');
  Route::get('/{lang}/info', 'HomeController@info');
  Route::get('/{lang}/news', 'HomeController@news');
  Route::get('/{lang}/news/{id}', 'NewsController@getNews');
  Route::get('/{lang}/gallery', 'GalleryController@index');

});
Route::post('/sendmail', 'HomeController@email');

// Route::get('/home', 'HomeController@index')->name('home');