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
	Route::get('/approve-training/approve-department-annual-training-plan/{id}','HomeController@getadatp')->name('adatp');
	Route::get('/approve-training/approve-individual-annual-training-plan/{id}','HomeController@getaaitp')->name('aiatp');
	Route::get('/approve-training/approve-group-annual-training-plan/{id}','HomeController@getagatp')->name('agatp');
	Route::get('/approve-training/approve-company-annual-training-plan/{id}','HomeController@getacatp')->name('acatp');

	Route::get('building-my-msc-objectives/building-my-msc-objectives/building-my-personal-development-plan/{id}','HomeController@getbmpdp')->name('bmpdp');
	Route::get('building-my-msc-objectives/building-my-msc-objectives/building-my-monthly-msc-objectives/{id}','HomeController@getbmmmo')->name('bmmmo');
	Route::get('building-my-msc-objectives/building-my-msc-objectives/building-my-annual-msc-objectives/{id}','HomeController@getbmamo')->name('bmamo');

	Route::get('building-my-msc-objectives/approving-my-employees-msc-objectives/approving-my-employees-annual-msc-objectives/{id}','HomeController@getameamo')->name('ameamo');
	Route::get('building-my-msc-objectives/approving-my-employees-msc-objectives/approving-my-employees-monthly-msc-objectives/{id}','HomeController@getamemmo')->name('amemmo');

	Route::get('rating-performance/rating-my-performance/rating-my-annual-performance/{id}','HomeController@getrmap')->name('rmap');

});
Route::group(['middleware' => ['role:general_director|super-admin']], function () {
    Route::get('/company-annual-trainning-plan/{id}','HomeController@getCATP')->name('CATP');
    Route::post('/company-annual-trainning-plan','HomeController@postCATP')->name('postCATP');

});
Route::group(['middleware' => ['role:super-admin']], function () {

});

