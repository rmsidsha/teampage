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
Route::resources([
    '/register' => 'UsersController',
    '/login' => 'TestController',
    '/home' => 'HomeController',
]);
// Route::resource('/register', 'UsersController');
// Route::resource('/login', 'TestController');