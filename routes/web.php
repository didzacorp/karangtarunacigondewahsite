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

Route::get('/', function () {
  return view('auth.login');
});

Route::resource('/dashboard', 'DashboardController'); //index

Route::resource('/users', 'UserController'); //index
Route::post('users/main', 'UserController@main');
Route::post('users/search', 'UserController@search');

Route::resource('/tasks', 'TaskController'); //index

Route::resource('/customer', 'CustomerController'); //index
Route::post('customer/main', 'CustomerController@main');

Route::resource('/customer_category', 'CustomerCategoryController'); //index

Route::resource('/product', 'ProductController'); //index
Route::post('product/main', 'ProductController@main');

Route::resource('/product_category', 'ProductCategoryController'); //index

Route::resource('/product_brand', 'ProductBrandController'); //index

Route::resource('/product_group', 'ProductGroupController'); //index

Route::resource('/product_unit', 'ProductUnitController'); //index

Route::resource('/report', 'ReportController'); //index

Route::get('/settings', function () {
    return view('settings/index');
});

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
