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

    return redirect('admin/login');
});
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/dashboard',function(){

    return view('layouts.template');

});
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('admin/login','AdminController@login')->name('admin.login');
Route::get('admin/students/all','AdminController@getStudents')->name('admin.students');

// create new students
Route::get('admin/students/create','AdminController@createNew')->name('admin.students.create');
Route::post('admin/students/create','AdminController@store')->name('admin.students.store');
Route::get('admin/students/fees','FeesController@index')->name('admin.students.fees');


// edit students
Route::get('admin/students/edit/{id}','AdminController@editStudents')->name('admin.students.edit');
Route::post('admin/students/update','AdminController@updateStudents')->name('admin.students.update');


// add fees dashboard
Route::get('admin/students/fees/dashboard','FeesController@index')->name('admin.students.fees');

// create fee record
Route::get('admin/students/fees','FeesController@create')->name('admin.fees.create');
Route::post('admin/students/fees/add','FeesController@store')->name('admin.fees.store');
Route::get('admin/emails/dashboard','EmailController@index')->name('admin.emails.dashboard');


// view date wise fees
Route::get('admin/students/fees/view','FeesController@view')->name('admin.fees.view');

// view all fees collections.
Route::get('admin/students/fees/all','FeesController@AllFees')->name('admin.fees.index');

// get total fees
Route::get('admin/students/totalfees','FeesController@getTotalFees')->name('admin.getTotalFees');


// get Student Names
Route::get('admin/students/getnames','AdminController@getNames')->name('admin.getStudentNames');


// Inquiries
Route::get('admin/students/inquiry/index','InquiryController@index')->name('admin.inquiry.index');
Route::get('admin/students/inquiry','InquiryController@create')->name('admin.inquiry');
Route::post('admin/students/inquiry','InquiryController@store')->name('inquiry.store');



// Batches.
Route::get('admin/students/batches/create','BatchController@create')->name('admin.batch.create');
Route::post('admin/students/batches','BatchController@store')->name('admin.batch.store');
Route::get('admin/students/batches/edit','BatchController@editBatch')->name('admin.batch.edit');
Route::post('admin/students/batches/update','BatchController@update')->name('admin.batch.update');
Route::get('admin/students/batches/view','BatchController@index')->name('admin.batch.view');
Route::get('admin/students/batches/get','BatchController@getBatches')->name('admin.batch.get');


// Online Attendance.
Route::get('admin/students/attendance/view','AttendanceController@getAllAttendanceData')->name('admin.attendance.view');
Route::get('admin/students/attendance/create','AttendanceController@show')->name('admin.attendance.create');
Route::post('admin/students/attendance','AttendanceController@store')->name('admin.attendance.store');


// Email Templates.
Route::get('admin/emails/template1',function(){


    return view('emails.template');

});
Route::get('admin/emails/template/inquiry',function(){


    return view('emails.static.inquiryemail');

});
Route::get('admin/emails/template/newadmission',function(){


    return view('emails.static.newadmission');

});
Route::get('tables',function(){

    return view('layouts.display_table');

});
