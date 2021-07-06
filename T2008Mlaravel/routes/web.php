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
//frontend
Route::get('/','App\Http\Controllers\HomeController@index');

Route::get('/trang-chu','App\Http\Controllers\HomeController@index');


//backend
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@Show_dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');

//Category Apartment
Route::get('/add-category-apartment','App\Http\Controllers\CategoryApartment@add_category_apartment');
Route::get('/edit-category-apartment/{category_apartment_id}','App\Http\Controllers\CategoryApartment@edit_category_apartment');
Route::get('/delete-category-apartment/{category_apartment_id}','App\Http\Controllers\CategoryApartment@delete_category_apartment');
Route::get('/all-category-apartment','App\Http\Controllers\CategoryApartment@all_category_apartment');

Route::get('/unactive-category-apartment/{category_apartment_id}','App\Http\Controllers\CategoryApartment@unactive_category_apartment');
Route::get('active-category-apartment/{category_apartment_id}','App\Http\Controllers\CategoryApartment@active_category_apartment');

Route::post('/save-category-apartment','App\Http\Controllers\CategoryApartment@save_category_apartment');
Route::post('/update-category-apartment/{category_apartment_id}','App\Http\Controllers\CategoryApartment@update_category_apartment');

//Apartment
Route::get('/add-apartment','App\Http\Controllers\ApartmentController@add_apartment');
Route::get('/edit-apartment/{apartment_id}','App\Http\Controllers\ApartmentController@edit_apartment');
Route::get('/delete-apartment/{apartment_id}','App\Http\Controllers\ApartmentController@delete_apartment');
Route::get('/all-apartment','App\Http\Controllers\ApartmentController@all_apartment');

Route::get('/unactive-apartment/{apartment_id}','App\Http\Controllers\ApartmentController@unactive_apartment');
Route::get('active-apartment/{apartment_id}','App\Http\Controllers\ApartmentController@active_apartment');

Route::post('/save-apartment','App\Http\Controllers\ApartmentController@save_apartment');
Route::post('/update-apartment/{apartment_id}','App\Http\Controllers\ApartmentController@update_apartment');


