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

//Admin Panel Routes....
Route::get('admin/dashboard', 'AdminController@index');
//Route::get('admin/pages/{id}/maps', 'AdminMapController@edit']);
Route::post('admin/pages/{id}/maps', 'AdminMapController@edit');

Route::post('admin/pages/{id}/edit/photos', 'AdminPagesController@addphoto');
Route::resource('admin/pages', 'AdminPagesController');

Route::get('admin/login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);
Route::post('admin/login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@login']);
Route::get('admin/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);

// Registration Routes...
Route::get('admin/register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@showRegistrationForm']);
Route::post('admin/register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@register']);

// Password Reset Routes...
/*
Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
Route::post('password/email', ['as' => 'auth.password.email',  'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@reset']);*/


Route::get('/home', 'HomeController@index');
