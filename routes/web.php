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
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/dashboard',function(){

    return view('layouts.navbar');

});
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('admin/login','AdminController@login')->name('admin.login');
Route::get('admin/students/all','AdminController@getStudents')->name('admin.students');
Route::get('admin/students/create','AdminController@createNew')->name('admin.students.create');
Route::post('admin/students/create','AdminController@store')->name('admin.students.store');
Route::get('tables',function(){

    return view('layouts.display_table');

});
