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
    //return view('welcome');
    return "Hello";
});
Route::get('hello','MyController@index');
Route::post('submit','MyController@submit');
//Route::get('form','MyController@form');

Route::get('form', 'FormController@index')->name('Form');

Route::post('FormInsert', 'FormController@insert')->name('FormInsert');



// EMS Project Routes

//Dashboard
Route::get('home', 'MainController@index')->name('home');

Route::get('addEmployee', 'MainController@add_employee')->name('addEmployee');
Route::post('employeeInsert', 'MainController@insert_employee')->name('employeeInsert');

Route::get('asignTask', 'MainController@asign_task')->name('asignTask');
Route::post('taskInsert', 'MainController@insert_task')->name('taskInsert');

Route::get('allTasks','MainController@all_tasks')->name('allTasks');
//End Dashboard

//Login
Route::get('Login','LoginController@index')->name('Login');
Route::post('CheckLogin','LoginController@login')->name('CheckLogin');
Route::get('Logout','LoginController@logout')->name('Logout');
// End Login

// End EMS Project Routes