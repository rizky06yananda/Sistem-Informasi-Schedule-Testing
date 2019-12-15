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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::resource('user', 'UserController');
Route::resource('pengajuan', 'PengajuanController');
Route::resource('tracking', 'TrackingController');
Route::resource('partner', 'PartnerController');



