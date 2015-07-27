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
Route::post('reports/students/id/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentById']);
Route::post('reports/students/name/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentByFirstName']);
Route::post('reports/students/lastname/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentByLastName']);
Route::post('reports/students/name/lastname/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentByFirstNameOrLastName']);
Route::post('reports/students/major/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentByMajor']);
Route::post('reports/students/degree/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentByDegree']);
Route::post('reports/students/adviser/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentByAdviser']);
Route::post('reports/students/scholarship/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentByScholarship']);
Route::post('reports/students/loan/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentByLoan']);
Route::post('reports/students/militaryDetail/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentByMilitaryDetail']);
Route::post('reports/students/fatherMotherStatus/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentByFatherMotherStatus']);
Route::post('reports/students/phoneNumber/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentByPhoneNumber']);
Route::post('reports/students/skill/search',['middleware'=>'mod','uses'=>'ReportController@searchStudentBySkill']);
Route::get('reports/students/id/{id}/download',['middleware'=>'mod','uses'=>'StudentController@download']);


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



