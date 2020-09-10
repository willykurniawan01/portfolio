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

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('administrator')
    ->middleware('auth')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::get('/post', 'PostController@index')->name('post');

        Route::get('/tambahpost', 'PostController@create')->name('post-create');

        Route::post('/simpanpost', 'PostController@store')->name('post-store');

        Route::get('{id}/editpost/', 'PostController@edit')->name('post-edit');

        Route::put('{id}/updatepost', 'PostController@update')->name('post-update');

        Route::get('{id}/deletepost/', 'PostController@destroy')->name('post-delete');


        Route::get('/slider', 'SliderController@index');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
