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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//This is use for the Admin Route
Route::get('/admin','Admin\AuthController@login');
//Admin Route

Route::prefix('admin')->group(function(){

	Route::get('/admin', 'Admin\AuthController@login');
	Route::get('/login', 'Admin\AuthController@login')->name('adminlogin')->middleware('redirectToAdminHome');
	Route::post('/login', 'Admin\AuthController@doLogin');
	Route::get('/logout', 'Admin\AuthController@logout')->name('adminlogout');
	Route::get('/dashboard', 'Admin\DashboardController@index')->name('admindashboard')->middleware('redirectAdminLogin');
	Route::get('/leads', 'Admin\LeadController@index')->name('leads')->middleware('redirectAdminLogin');
	Route::post('/leadUpdate', 'Admin\LeadController@leadUpdate')->name('leadUpdate')->middleware('redirectAdminLogin');
	Route::post('/postUpdate', 'Admin\LeadController@postUpdate')->name('postUpdate')->middleware('redirectAdminLogin');

});


?>