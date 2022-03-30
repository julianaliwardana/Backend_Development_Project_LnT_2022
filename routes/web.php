<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/user/phone', 'UserController@index');
    Route::middleware(['check.admin'])->group(function () {
        Route::get('user/phone/create', 'UserController@create');
        Route::post('/user/phone/store', 'UserController@store');
        Route::get('/article/{id}', 'ArticleController@index');
    });
});


Auth::routes();
