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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/student/create', 'TestController@createStudent');
Route::get('/admin/create', 'TestController@createAdmin');
Route::get('/admin/student-check-in', 'AdministratorController@showCheckInForm');
Route::post('/admin/student-check-in', 'StudentController@checkIn');
Route::post('sale/create', 'SaleController@store');
Route::resource('products', 'ProductController');