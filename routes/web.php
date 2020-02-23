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




Route::group(['middleware' => ['role:employees|super-admin']], function () {
    Route::get('/individual-annual-training-plan/{id}', 'HomeController@getIATP')->name('IATP');
    Route::post('/individual-annual-training-plan/{id}', 'HomeController@postIATP')->name('postIATP');

    Route::get('/training-employees/{id}','HomeController@getTI')->name('TI');


    Route::group(['prefix'=>'training-implementation'],function(){
		Route::get('/company-annual-training-plan-schedule', 'HomeController@getCATPS')->name('CATPS');
		Route::get('/company-annual-training-plan-progress', 'HomeController@getCATPP')->name('CATPP');
		Route::get('/post-training-evaluation-by-participant/{id}', 'HomeController@getPTEBP')->name('PTEBP');
		Route::get('/post-training-evaluation-combined-records', 'HomeController@getPTECR')->name('PTECR');
	});

	Route::group(['prefix'=>'performace-management'],function(){
		Route::get('/performance-management-report', 'HomeController@getPerformaceManagement')->name('performaceManagement');
        Route::get('/print-performance-report', 'PdfController@printPerformanceReport')->name('printPerformanceReport');

		Route::group(['prefix'=>'managing-company-performances'],function(){
			Route::get('/company-monthly-performance-report', 'HomeController@getCMPR')->name('CMPR');
			Route::get('/company-multi-monthly-performance-report', 'HomeController@getCMMPR')->name('CMMPR');
			Route::get('/company-annual-performance-report', 'HomeController@getCAPR')->name('CAPR');
			Route::get('/company-multi-annual-performance-report', 'HomeController@getCMAPR')->name('CMAPR');
			Route::get('/company-monthly-performance-report-filter-by-levels', 'HomeController@getCMPR_FBL')->name('CMPR_FBL');
			Route::get('/company-annual-performance-report-filter-by-levels', 'HomeController@getCAPR_FBL')->name('CAPR_FBL');
			Route::get('/company-multi-annual-performance-report-filter-by-levels', 'HomeController@getCMAPR_FBL')->name('CMAPR_FBL');
		});
		Route::group(['prefix'=>'managing-department-performances'],function(){
			Route::get('/department-monthly-performance-report', 'HomeController@getDMPR')->name('DMPR');
			Route::get('/department-multi-monthly-performance-report', 'HomeController@getDMMPR')->name('DMMPR');
			Route::get('/department-annual-performance-report', 'HomeController@getDAPR')->name('DAPR');
			Route::get('/department-multi-annual-performance-report', 'HomeController@getDMAPR')->name('DMAPR');
			Route::get('/department-monthly-performance-report-filter-by-levels', 'HomeController@getDMPR_FBL')->name('DMPR_FBL');
			Route::get('/department-annual-performance-report-filter-by-levels', 'HomeController@getDAPR_FBL')->name('DAPR_FBL');
			Route::get('/department-multi-annual-performance-report-filter-by-levels', 'HomeController@getDMAPR_FBL')->name('DMAPR_FBL');
		});
		Route::group(['prefix'=>'managing-employees-performances'],function(){
			Route::get('/employees-monthly-performance-report/{id}', 'HomeController@getEMPR')->name('EMPR');
			Route::get('/employees-multi-monthly-performance-report/{id}', 'HomeController@getEMMPR')->name('EMMPR');
			Route::get('/employees-annual-performance-report/{id}', 'HomeController@getEAPR')->name('EAPR');
			Route::get('/employees-multi-annual-performance-report/{id}', 'HomeController@getEMAPR')->name('EMAPR');
			Route::get('/employees-multi-month-performance-report-filter-by-levels/{id}', 'HomeController@getEMMPR_FBL')->name('EMMPR_FBL');
			Route::get('/employees-multi-annual-performance-report-filter-by-levels/{id}', 'HomeController@getEMAPR_FBL')->name('EMAPR_FBL');
		});
		Route::group(['prefix'=>'managing-my-performances'],function(){
			Route::get('/my-monthly-performance-report/{id}', 'HomeController@getMMPR')->name('MMPR');
			Route::get('/my-multi-monthly-performance-report/{id}', 'HomeController@getMMMPR')->name('MMMPR');
			Route::get('/my-annual-performance-report/{id}', 'HomeController@getMAPR')->name('MAPR');
			Route::get('/my-multi-annual-performance-report/{id}', 'HomeController@getMMAPR')->name('MMAPR');
			Route::get('/my-multi-monthly-performance-report-filter-by-levels/{id}', 'HomeController@getMMMPR_FBL')->name('MMMPR_FBL');
			Route::get('/my-multi-annual-performance-report-filter-by-levels/{id}', 'HomeController@getMMAPR_FBL')->name('MMAPR_FBL');
		});
	});
});

Route::group(['middleware' => ['role:supervisors|super-admin']], function () {
	Route::get('/group-annual-training-plan', 'HomeController@getGATP')->name('GATP');
});
Route::group(['middleware' => ['role:department_managers|super-admin']], function () {
	Route::get('/department-annual-training-plan/{id}','HomeController@getDATP')->name('DATP');


	Route::get('/approving-my-employees-msc-objectives/approving-my-employees-annual-msc-objectives/{id}','HomeController@getAMEAMO')->name('AMEAMO');
	Route::get('/approving-my-employees-msc-objectives/approving-my-employees-monthly-msc-objectives/{id}','HomeController@getAMEMMO')->name('AMEMMO');

	Route::group(['prefix'=>'approving-my-employees-performance'], function() {
            Route::get('approving-my-employees-annual-performance/{id}','HomeController@getAMEAP')->name('AMEAP');
		Route::get('approving-my-employees-monthly-performance/{id}','HomeController@getAMEMP')->name('AMEMP');
	});

});

Route::group(['middleware' => ['role:department_managers|employees|super-admin']], function () {

    Route::group(['prefix' => 'building-my-msc-objectives'], function () {
        Route::get('/building-my-msc-objectives/building-my-personal-development-plan/{id}', 'HomeController@getBMPDP')->name('BMPDP');
        Route::get('/building-my-msc-objectives/building-my-monthly-msc-objectives/{id}', 'HomeController@getBMMMO')->name('BMMMO');
        Route::get('/building-my-msc-objectives/building-my-annual-msc-objectives/{id}', 'HomeController@getBMAMO')->name('BMAMO');
    });

    Route::group(['prefix' => 'rating-performance'], function () {
        Route::get('/rating-my-annual-performance/{id}', 'HomeController@getRMAP')->name('RMAP');
        Route::get('/rating-my-monthly-performance/{id}', 'HomeController@getRMMP')->name('RMMP');
    });
});


Route::group(['middleware' => ['role:director|super-admin']], function () {

	Route::group(['prefix'=>'approve-training'], function() {
		Route::get('/approve-department-annual-training-plan/{id}','HomeController@getADATP')->name('ADATP');
		Route::get('/approve-individual-annual-training-plan/{id}','HomeController@getAIATP')->name('AIATP');
		Route::get('/approve-group-annual-training-plan/{id}','HomeController@getAGATP')->name('AGATP');
		Route::get('/approve-company-annual-training-plan/{id}','HomeController@getACATP')->name('ACATP');
	});

});
