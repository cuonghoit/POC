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

Route::group(['middleware' => ['role:employees|super-admin']], function () {
    Route::get('/individual-annual-training-plan/{id}', 'HomeController@getIATP')->name('IATP');
    Route::post('/individual-annual-training-plan', 'HomeController@postIATP')->name('postIATP');
});

Route::group(['middleware' => ['role:supervisors|super-admin']], function () {

});
Route::group(['middleware' => ['role:department_managers|super-admin']], function () {
	Route::get('/department-annual-training-plan/{id}','HomeController@getdatp')->name('datp');
});
Route::group(['middleware' => ['role:director|super-admin']], function () {
	Route::get('/approve-department-annual-training-plan/{id}','HomeController@getadatp')->name('adatp');

});
Route::group(['middleware' => ['role:general_director|super-admin']], function () {
    Route::get('/company-annual-trainning-plan/{id}','HomeController@getCATP')->name('CATP');
});
Route::group(['middleware' => ['role:super-admin']], function () {

});

