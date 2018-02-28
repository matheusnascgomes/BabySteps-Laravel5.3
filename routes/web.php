<?php

Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);

Route::get('/logout',['as'=>'site.logout','uses'=>'Site\LoginController@logout']);

Route::post('/signin',['as'=>'site.signin','uses'=>'Site\LoginController@signIn']);

Route::group(['middleware'=>'auth'], function(){

  Route::get('/admin/courses',['as'=>'admin.courses','uses'=>'Admin\CourseController@index']);

  Route::get('/admin/courses/add',['as'=>'admin.courses.add','uses'=>'Admin\CourseController@add']);

  Route::post('/admin/courses/save',['as'=>'admin.courses.save','uses'=>'Admin\CourseController@save']);

  Route::get('/admin/courses/update/show/{id}',['as'=>'admin.courses.update.show','uses'=>'Admin\CourseController@updateShow']);

  Route::put('/admin/courses/update/{id}',['as'=>'admin.courses.update','uses'=>'Admin\CourseController@update']);

  Route::get('/admin/courses/delete/{id}',['as'=>'admin.courses.delete','uses'=>'Admin\CourseController@delete']);

});
