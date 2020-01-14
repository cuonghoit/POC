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


Route::get('/login', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/individual-annual-training-plan/{id}', 'HomeController@getIATP')->name('IATP');
Route::post('/individual-annual-training-plan', 'HomeController@postIATP')->name('postIATP');

Route::get('/Company-Annual-Trainning-Plan/{id}','HomeController@getCATP')->name('CATP');




