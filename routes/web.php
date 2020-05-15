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
// admin
Route::get('/','AdminController@index')->name('admin.index')->middleware('auth');



// student
Route::get('/siswa','StudentsController@index')->name('student.index')->middleware('auth');
Route::get('/siswa/create','StudentsController@create')->name('student.create')->middleware('auth');
Route::get('/siswa/{student}','StudentsController@show')->name('student.show')->middleware('auth');
Route::get('/siswa/{student}/edit','StudentsController@edit')->name('student.edit')->middleware('auth');
Route::patch('/siswa/{student}','StudentsController@update')->name('student.update')->middleware('auth');
Route::delete('/siswa/{student}','StudentsController@destroy')->name('student.destroy')->middleware('auth');
Route::post('/siswa/store','StudentsController@store')->name('student.store')->middleware('auth');



// Teacher
Route::get('/guru','TeachersController@index')->name('teacher.index')->middleware('auth');
Route::get('/guru/create','TeachersController@create')->name('teacher.create')->middleware('auth');
Route::get('/guru/{teacher}','TeachersController@show')->name('teacher.show')->middleware('auth');
Route::get('/guru/{teacher}/edit','TeachersController@edit')->name('teacher.edit')->middleware('auth');
Route::patch('/guru/{teacher}','TeachersController@update')->name('teacher.update')->middleware('auth');
Route::delete('/guru/{teacher}','TeachersController@destroy')->name('teacher.destroy')->middleware('auth');
Route::post('/guru/store','TeachersController@store')->name('teacher.store')->middleware('auth');


// Worker
Route::get('/pegawai','WorkersController@index')->name('worker.index')->middleware('auth');
Route::get('/pegawai/create','WorkersController@create')->name('worker.create')->middleware('auth');
Route::get('/pegawai/{worker}','WorkersController@show')->name('worker.show')->middleware('auth');
Route::get('/pegawai/{worker}/edit','WorkersController@edit')->name('worker.edit')->middleware('auth');
Route::patch('/pegawai/{worker}','WorkersController@update')->name('worker.update')->middleware('auth');
Route::delete('/pegawai/{worker}','WorkersController@destroy')->name('worker.destroy')->middleware('auth');
Route::post('/pegawai/store','WorkersController@store')->name('worker.store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
