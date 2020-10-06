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
Route::group(['middleware' => 'checkLogin'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/play/{id}', 'FileController@playVideo');
    Route::post('/upload', 'UploadController@determineType');
    Route::get('/videos', 'FileController@videos')->name('videos');
    Route::get('/games', 'FileController@games')->name('games');
    Route::get('/images', 'FileController@images')->name('images');
    Route::get('/other', 'FileController@other')->name('other');
    Route::get('/music', 'FileController@music')->name('music');
    Route::get('/create','FileController@create')->name('create');
    Route::get('/file/{id}', 'FileController@show')->name('file');
    Route::get('file/delete/{id}', 'FileController@delete');
    Route::get('/invite', 'InviteController@index');
    Route::post('/invite', 'InviteController@generate');
    Route::get('guest/generate/{file_id}', 'GuestController@generate');

});
    Route::get('guest/{code}', 'GuestController@show');
    Route::get('file/download/{id}', 'FileController@download');

    Route::get('/login', 'LoginController@indexLogin');
    Route::get('/register', 'LoginController@indexRegister');
    Route::post('/register', 'LoginController@doRegister');
    Route::post('/login', 'LoginController@dologin');
    Route::get('/logout', 'LoginController@logout');
