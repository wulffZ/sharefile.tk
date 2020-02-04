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
    Route::get('/', 'FileController@index');
    Route::post('/upload', 'UploadController@determineType');
    Route::get('/create','FileController@create');
    Route::get('/test','FileController@getRecentFiles');
});
    Route::get('/login', 'LoginController@index');
    Route::post('/login', 'LoginController@checklogin');
    Route::get('/logout', 'LoginController@logout');
