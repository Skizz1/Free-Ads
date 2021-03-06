<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', "IndexController@showIndex");

// Route::get('/register', "Auth\AuthController@getRegister");
// Route::post('/register', "Auth\AuthController@postRegister");
Route::get('/login', "Auth\AuthController@getLogin");
Route::post('/login', "Auth\AuthController@postLogin");
// Route::get('/logout', "Auth\AuthController@logout");

Route::get('/home', "HomeController@index");

Route::get('/contact', 'PagesController@contact');

Route::resource('/users', 'UsersController');
Route::get('/register', 'UserController@showUserRegistration');
Route::post('/register', 'UserController@saveUser');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
