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

Route::get('/index', 'IndexController@index')->name('home');


Route::get('/', 'IndexController@index')->name('home');

Route::get('/auth/google', 'Auth\GoogleController@redirectToProvider');
Route::get('/auth/google/callback', 'Auth\GoogleController@handleProvider');
Route::get('/auth/twitter', 'Auth\TwitterController@redirectToProvider');
Route::get('/auth/twitter/callback', 'Auth\TwitterController@handleProvider');
Route::get('/auth/facebook', 'Auth\FacebookController@redirectToProvider');
Route::get('/auth/facebook/callback', 'Auth\FacebookController@handleProvider');
