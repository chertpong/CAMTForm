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

Route::get('login/students', 'StudentLoginController@index');
Route::post('login/students', 'StudentLoginController@postLogin');
Route::get('logout/students', 'StudentLoginController@getLogout');

Route::get('forms', ['middleware'=>'student','uses'=>'FormController@index']);