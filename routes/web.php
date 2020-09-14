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
Route::get('/gallery', 'HomeController@gallery')->name('home-gallery');
Route::get('/about', 'HomeController@about')->name('home-about');
Route::get('/contact', 'HomeController@contact')->name('home-contact');
Route::get('/blog', 'BlogController@index')->name('home-blog');
Route::get('blog/{slug}', 'BlogController@show');


Route::prefix('administrator')
    ->middleware('auth')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');

        // Post
        Route::get('/post', 'PostController@index')->name('post');

        Route::get('/tambahpost', 'PostController@create')->name('post-create');

        Route::post('/simpanpost', 'PostController@store')->name('post-store');

        Route::get('{id}/editpost/', 'PostController@edit')->name('post-edit');

        Route::put('{id}/updatepost', 'PostController@update')->name('post-update');

        Route::get('{id}/deletepost/', 'PostController@destroy')->name('post-delete');

        // Slider
        Route::get('/slider', 'SliderController@index')->name('slider');

        Route::get('/tambahslider', 'SliderController@create')->name('slider-create');

        Route::post('/simpanslider', 'SliderController@store')->name('slider-store');

        Route::get('/slider/{id}/delete', 'SliderController@destroy')->name('slider-delete');

        Route::get('/slider/{id}/edit', 'SliderController@edit')->name('slider-edit');

        // Gallery
        Route::get('/gallery', 'GalleryController@index')->name('gallery');

        Route::get('/tambahgallery', 'GalleryController@create')->name('gallery-create');

        Route::post('/simpangallery', 'GalleryController@store')->name('gallery-store');

        Route::get('/gallery/{id}/delete', 'GalleryController@destroy')->name('gallery-delete');

        Route::get('/gallery/{id}/edit', 'GalleryController@edit')->name('gallery-edit');

        Route::put('{id}/updategallery', 'GalleryController@update')->name('gallery-update');

        // category gallery
        Route::post('/simpankategorigallery', 'GalleryController@storecategory')->name('addgallerycategory');

        Route::get('kategorigallery/{id}/hapuskategorigallery', 'GalleryController@destroycategory')->name('categorygallery-delete');
    });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
