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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/','SiteController@home');
Route::get('/profil','SiteController@profil');
Route::get('/instruktur','SiteController@instruktur');
Route::get('/sapras','SiteController@sapras');
Route::get('/em','SiteController@em');
Route::get('/mmd','SiteController@mmd');
Route::get('/tkj','SiteController@tkj');
Route::get('/otkp','SiteController@otkp');
Route::get('/news','SiteController@news');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:admin']],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/guru','GuruController@index');
    Route::post('/guru/create','GuruController@create');
    Route::get('/guru/{id}/edit','GuruController@edit');
    Route::post('/guru/{id}/update','GuruController@update');
    Route::get('/guru/{id}/delete','GuruController@delete');
    Route::get('/guru/{id}/profil','GuruController@profil');
});

Route::group(['middleware' => ['auth','checkRole:admin,guru']],function(){
    Route::get('/dashboard','DashboardController@index');
});

