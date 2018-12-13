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
    return view('auth.login');
});
Auth::routes();
Route::get('/image', 'ImageUploadController@index');
Route::POST('/store','ImageUploadController@store')->name('upload');
Route::delete('/delete/{id}/delete','ImageUploadController@delete')->name('delete');
/*

Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::get('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/login', 'Auth\LoginController@login')->name('login');*/