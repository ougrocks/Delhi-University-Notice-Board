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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', 'RegisterController@showRegister');
Route::post('/register', 'RegisterController@doRegister');
Route::get('/admin', 'AdminController@showAdmin');
Route::post('/admin','AdminController@insertNotification');
Route::get('/notification', 'NotificationController@viewNotification');