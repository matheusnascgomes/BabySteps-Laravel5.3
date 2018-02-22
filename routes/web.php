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

Route::get('/admin/courses',['as'=>'admin.courses','uses'=>'Admin\CourseController@index']);
Route::get('/admin/courses/add',['as'=>'admin.courses.add','uses'=>'Admin\CourseController@add']);
Route::post('/admin/courses/save',['as'=>'admin.courses.save','uses'=>'Admin\CourseController@save']);
Route::get('/admin/courses/update/{id}',['as'=>'admin.courses.update.list','uses'=>'Admin\CourseController@updateList']);
Route::put('/admin/courses/update/{id}',['as'=>'admin.courses.update','uses'=>'Admin\CourseController@update']);
Route::get('/admin/courses/delete/{id}',['as'=>'admin.courses.save','uses'=>'Admin\CourseController@delete']);
