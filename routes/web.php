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

Route::get('/', "CrimeController@reporting")->name('reporting');
Route::post('/crime_report', "CrimeController@crime_report")->name('crime_report');


Route::group(['namespace'=>'account','prefix'=>'auth'], function (){
    Route::resource('login', "LoginController");
});

Route::group(['namespace'=>'admin','prefix'=>'admin'], function (){

    Route::middleware(['auth'])->group(function (){

        Route::get('/dashboard', "AdminController@dashboard")->name('dashboard');

        Route::get('/users', "AdminController@users")->name('users');
        Route::post('/create_new_user', "AdminController@create_new_user")->name('create_new_user');
        Route::get('/add-user', "AdminController@add_user")->name('add_user');


        Route::get('/add-crime-category', "CrimeController@add_crime_category")->name('add_crime_category');
        Route::get('/edit-crime-category/{category}', "CrimeController@edit_crime_category")->name('edit_crime_category');

        Route::get('/crime-category', "CrimeController@crime_category")->name('crime_category');
        Route::get('/crime-reporting', "CrimeController@crime_reporting")->name('crime_reporting');
        Route::post('/update_crime_category', "CrimeController@update_crime_category")->name('update_crime_category');
        Route::post('/create_new_crime_category', "CrimeController@create_new_crime_category")->name('create_new_crime_category');


    });
});