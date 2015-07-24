<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('roles',['middleware'=>'admin','uses'=>'Auth\RoleController@index']);

Route::get('reports',['middleware'=>'mod','uses'=>'ReportController@index']);
Route::post('reports/students',['middleware'=>'mod','uses'=>'ReportController@searchId']);

Route::get('login/students', 'StudentLoginController@index');
Route::post('login/students', 'StudentLoginController@postLogin');
Route::get('logout/students', 'StudentLoginController@getLogout');

Route::get('forms', ['middleware'=>'student','uses'=>'FormController@index']);

Route::get('forms/students/{id}',['middleware'=>'student','uses'=>'StudentController@edit']);
Route::put('forms/students/{id}',['middleware'=>'student','uses'=>'StudentController@update']);
Route::get('forms/address/{id}',['middleware'=>'student','uses'=>'AddressController@index']);
Route::post('forms/address/{id}',['middleware'=>'student','uses'=>'AddressController@updateForignkeyStudent']);

Route::get('forms/family/{id}',['middleware'=>'student','uses'=>'FamilyController@index']);
Route::get('forms/family/form/{id}',['middleware'=>'student','uses'=>'FamilyController@form']);
Route::post('forms/family/form/{id}',['middleware'=>'student','uses'=>'FamilyController@create']);
Route::post('forms/address/{id}',['middleware'=>'student','uses'=>'AddressController@updateForignkeyFamily']);
//TODO family form submit-> address

//Route::get('forms/education-history',['middleware'=>'student','uses'=>'FormController@index']);
//Route::get('forms/family}',['middleware'=>'student','uses'=>'FormController@index']);
//Route::get('forms/loan-history',['middleware'=>'student','uses'=>'FormController@index']);
//Route::get('forms/scholarship-history',['middleware'=>'student','uses'=>'FormController@index']);



