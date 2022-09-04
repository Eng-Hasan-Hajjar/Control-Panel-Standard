<?php

/*
admin routes
|

*/

Route::middleware(['web','admin'])->group(function () {
    
	
	#main admin
	Route::get('/adminpanel','AdminController@index')->name('adminpanel');

	#users
	Route::resource('/adminpanel/users','UsersController');
	Route::resource('/adminpanel/visitors','VisitorsController');

 
    #Companies
    Route::resource('/adminpanel/companies','CompaniesController');

    #Ctegories
    Route::resource('/adminpanel/categories','CategoriesController');


    });

/*
    admin Company routes
    |
*/
Route::middleware(['web','adminCompany'])->group(function () {
     #Services
     Route::resource('/adminpanel/services','ServicesController');

    });


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|

|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// services in website routes
Route::get('ShowAllService','ServicesController@showAllService');
Route::get('ShowDetailService/{id}','ServicesController@showDetailService');


// company in website routes
Route::get('ShowAllCompany','CompaniesController@showAllCompany');
Route::get('ShowDetailCompany/{id}','CompaniesController@showDetailCompany');


Route::get('ShowCategory','CompaniesController@showCategory');
Route::get('ShowCategory2','CompaniesController@showCategory2');
Route::get('ShowCategory3','CompaniesController@showCategory3');
Route::get('ShowCategory4','CompaniesController@showCategory4');
Route::get('ShowCategory5','CompaniesController@showCategory5');
Route::get('ShowCategory6','CompaniesController@showCategory6');
Route::get('ShowCategory7','CompaniesController@showCategory7');
Route::get('ShowCategory8','CompaniesController@showCategory8');

