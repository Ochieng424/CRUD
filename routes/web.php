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
Route::post('','UnitController@store');

Route::resources([
    'employees'=> 'EmployeeController',
]);

Route::get('/property-units/{id}', 'ViewUnitsController@index')->name('property-units');
Route::get('/edit-unit/{id}', 'UnitController@edit')->name('edit-unit');
Route::put('/edit-unit/{id}', 'UnitController@update');