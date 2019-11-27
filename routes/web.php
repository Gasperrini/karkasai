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

Route::get('/', 'PagesController@index');

Route::get('/contacts', 'PagesController@contacts');

Route::get('/form', 'PagesController@form');

Route::get('/guitarists', 'PagesController@guitarists');

Route::get('/news', 'PagesController@news');

Route::resource('questions', 'QuestionsController');

Route::resource('registrations', 'RegistrationsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@dashboard');

Route::resource('guitarists', 'MokytojaiController');

//Route::get('registrations', 'MokytojaiController@index1');