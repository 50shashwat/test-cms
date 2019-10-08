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
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/about-us', 'StaticController@about')->name('about');
Route::get('/contact-us', 'StaticController@contact')->name('contact');
Route::get('/careers', 'StaticController@careers')->name('careers');
Route::get('/video-gallery', 'GalleryController@video')->name('video-gallery');
Route::get('/carpenter-pathshaala', 'StaticController@carpenterpathshala')->name('carpenter-pathshala');
Route::get('/display-and-design', 'StaticController@displaydisign')->name('carpenter-pathshala');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/channel-partnership', 'StaticController@channelpartnership')->name('channel-partner');
Route::get('/helpline-numbers', 'StaticController@helpline')->name('helpline');
Route::get('/products/locks', 'ProductController@lock')->name('product-lock');
Route::get('/products/kitchen-accessories', 'ProductController@kitchen_accessories')->name('product-kitchen-accessories');

Route::post('/contact','StaticController@sendContact');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/','Admin\AdminController@index')->name('admin.dashboard');
});