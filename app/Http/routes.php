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

Route::get('/', function () {
    return view('welcome');
});

//Route::auth(); //C:\xampp\htdocs\Agrovita\vendor\laravel\framework\src\Illuminate\Routing\Router.php
// Authentication Routes...
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@register');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

Route::get('admin/login', 'Admin\AdminAuth@login');
Route::post('admin/login', 'Admin\AdminAuth@login');

Route::post('admin/register', 'Admin\AdminAuth@register');

Route::get('home', 'HomeController@index');

Route::get('admin/dashboard', 'Admin\AdminController@index');
Route::get('admin/logout', 'Admin\AdminAuth@logout');

Route::group(['middleware' =>['admin']], function(){

});
