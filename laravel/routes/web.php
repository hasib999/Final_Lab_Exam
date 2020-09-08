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
    return redirect()->route('login.index');
});

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify');
Route::get('/logout', ['as'=>'logout.index', 'uses'=>'logoutController@index']);


Route::middleware(['sess'])->group(function(){

    Route::group(['middleware'=>['type']], function(){

        Route::get('/admin','AdminController@index')->name('admin.index');

        Route::get('/admin/register','AdminController@reg')->name('admin/register.index');
        Route::post('/admin/register','AdminController@insert');

        Route::get('/admin/edit/{id}','AdminController@edit')->name('admin.edit');
        Route::post('/admin/edit/{id}','AdminController@update');

        Route::get('/admin/delete/{id}','AdminController@delete')->name('admin.delete');
        Route::post('/admin/delete/{id}','AdminController@destroy');


        Route::get('/employee','EmployeeController@index')->name('employee.index');
        Route::get('/employee/addJob','EmployeeController@addNewJob')->name('employee.addJob');
        Route::post('/employee/addJob','EmployeeController@add');

        Route::get('/employee/editJob/{id}','EmployeeController@editJob')->name('employee.editJob');
        Route::get('/employee/deleteJob/{id}','EmployeeController@deleteJob')->name('employee.deleteJob');



    });
});