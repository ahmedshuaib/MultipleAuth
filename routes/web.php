<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);

Route::group(['prefix'=>'user', 'middleware' => ['web', 'auth', 'verified']], function (){
    Route::get('/', 'HomeController@index')->name('home');
});

Route::group(['prefix' =>'admin', 'namespace' => 'Admin', 'middleware' => ['auth:system', 'verified', 'super_user']], function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
});

Route::group(['prefix', 'admin', 'namespace' => 'AdminAuth'], function() {
    Route::get('admin/login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'LoginController@login')->name('admin.submit');
    Route::post('admin/logout', 'LoginController@logout')->name("admin.logout");
});
