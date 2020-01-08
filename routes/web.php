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

Route::get('/INDIVIDUAL-ANNUAL-TRAINING-PLAN/{staff}', 'HomeController@getIATP')->name('IATP');
Route::post('/INDIVIDUAL-ANNUAL-TRAINING-PLAN', 'HomeController@postIATP')->name('postIATP');
