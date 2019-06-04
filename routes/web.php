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
//Route::get('/employees', 'EmployeeController@index')->name('employees');
//
//Route::get('/employees/create', 'EmployeeController@create');
//Route::post('/employees/', 'EmployeeController@store');

Route::get('/units', 'UnitController@index')->name('units');
Route::post('/add-unit','UnitController@store');

Route::resources([
    'employees'=> 'EmployeeController',
    'rate'=> 'RatingController',
    'viewEmp'=> 'ViewEmpController',
]);

Route::get('/property-units/{id}', 'ViewUnitsController@index')->name('property-units');
Route::get('/edit-unit/{id}', 'UnitController@edit')->name('edit-unit');
Route::put('/edit-unit/{id}', 'UnitController@update');

Route::get('/subscribe', 'SubscriptionController@index')->name('subscribe');
Route::post('/subscribe', 'SubscriptionController@store');

//Route::get('/rate', 'RatingController@index')->name('rate');
//Route::post('/rate.store', 'RatingController@store')->name('rate.store');

Route::get('/pay-option/{id}', 'PayOptionController@index')->name('pay-option');
Route::get('/mpesa-payment/{id}', 'MpesaPaymentController@index')->name('mpesa-payment');
Route::post('','MpesaPaymentController@store');

Route::get('/invoice', 'InvoiceController@index')->name('invoice');