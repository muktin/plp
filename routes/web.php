<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@index')->name('admin.home');

Route::group(['namespace'=>'Admin'], function(){
	/* Dashboard */
	Route::get('admin/dashboard', 'DashboardController@index')->name('admin.dashboard');

	/* card type */
	Route::get('admin/card_type/create', 'CardTypeController@create')->name('admin.card_type.create');
	Route::post('admin/card_type/store', 'CardTypeController@store')->name('admin.card_type.store');
	Route::get('admin/card_type/view', 'CardTypeController@index')->name('admin.card_type.view');
	Route::get('admin/card_type/edit/{id}', 'CardTypeController@edit')->name('admin.card_type.edit');
	Route::put('admin/card_type/update/{id}', 'CardTypeController@update')->name('admin.card_type.update');

		/* Master course */
		Route::get('admin/master_course/create', 'masterCourseController@create')->name('admin.master_course.create');
		Route::post('admin/master_course/store', 'masterCourseController@store')->name('admin.master_course.store');
		Route::get('admin/master_course/view', 'masterCourseController@index')->name('admin.master_course.view');
		Route::get('admin/master_course/edit/{id}', 'masterCourseController@edit')->name('admin.master_course.edit');
		Route::put('admin/master_course/update/{id}', 'masterCourseController@update')->name('admin.master_course.update');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
