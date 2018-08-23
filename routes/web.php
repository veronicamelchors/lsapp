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

//this calls the home page
//http://lsapp.test/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//http://lsapp.test/hello
//instead of calling a view we just output a message
//we can include html directly
/*
Route::get('/hello', function () {
    return '<h1>Hello World<h1>';
});
*/


//Passing multiple parameters
/*
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user ' . $name . ' with an id id of ' . $id;
});
*/

//This calls the controler instead of a view
Route::get('/', 'PagesController@index');


//This calls the controler instead of a view
Route::get('/about', 'PagesController@about');

//This calls the controler instead of a view
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');



Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
