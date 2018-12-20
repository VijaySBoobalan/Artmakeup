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

Route::get('/admin/login', function () {
    return view('auth.login');
});

Route::get('/about', function() {
    return view ('makeup.about');
});
Route::get('/contact', function() {
    return view('makeup.contact');
});
Route::get('/portfolio', function() {
    return view('makeup.portfolio');
});
Route::get('/', function() {
    return view('makeup.index');
});

Route::get('/services', function() {
    return view('makeup.services');
});

Auth::routes();
Route::get('/home', function() {
    return redirect('/image');
});
Route::get('/image', 'ImageUploadController@index');
Route::POST('/store','ImageUploadController@store')->name('upload');
Route::delete('/delete/{id}/delete','ImageUploadController@delete')->name('delete');
