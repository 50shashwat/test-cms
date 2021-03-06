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

Route::get('/', 'StaticController@home')->name('home');

Route::get('/about/{type}', 'StaticController@aboutpage')->name('aboutpage');
Route::post('/search', 'ProductController@searchproduct')->name('searchpage');
Auth::routes();

Route::get('/home.html', 'StaticController@home')->name('home');
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/about-us', 'StaticController@about')->name('about');
Route::get('/contact-us', 'StaticController@contact')->name('contact');
Route::get('/careers', 'StaticController@careers')->name('careers');
Route::get('/video-gallery', 'GalleryController@video')->name('video-gallery');
Route::get('/application-solutions', 'StaticController@carpenterpathshala')->name('carpenter-pathshala');
Route::get('/display-and-design', 'StaticController@displaydisign')->name('carpenter-pathshala');
Route::get('/blogs', 'BlogController@index')->name('blog');
Route::get('/channel-partnership', 'StaticController@channelpartnership')->name('channel-partner');
Route::get('/helpline-numbers', 'StaticController@helpline')->name('helpline');
Route::get('/products/locks', 'ProductController@lock')->name('product-lock');
Route::get('/products/kitchen-accessories', 'ProductController@kitchen_accessories')->name('product-kitchen-accessories');
Route::get('/products/new-arrivals','ProductController@new_arrivals')->name('product-new-arrivals');
Route::get('/home.html',function () {
    return view('frontend.index');
});

Route::get('/terms-and-conditions','StaticController@terms')->name('terms');
Route::get('/privacy-policy','StaticController@privacy')->name('privacy');
Route::get('/disclaimer','StaticController@disclaimer')->name('disclaimer');
Route::get('/products/{category}/{subcategory}/{innercategory}','ProductController@innercategoryProducts')->name('innercategoryproducts');
Route::get('/products/{category}/{subcategory}','ProductController@subcategoryProducts')->name('subcategoryproducts');
Route::get('/products/{category}','ProductController@categoryProducts')->name('categoryproducts');
Route::get('/product-show/{productId}','ProductController@productshow')->name('productshow');

Route::post('/contact','StaticController@sendContact');
Route::get('/achievement', 'StaticController@achievements')->name('achievements');

Route::get('/blog-show/{id}','BlogController@show')->name('blog.show');
Route::post('/branding','FormController@orderForms');

Route::get('/safety', 'StaticController@safety')->name('safety');

Route::prefix('/admin')->group(function(){
    Route::get('/dashboard','Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/users','Admin\AdminController@user')->name('admin.users');
    Route::get('/pages/{type}','Admin\PageController@getPage')->name('admin.pages');
    Route::post('/pages/{type}','Admin\PageController@storePage')->name('admin.pages');
    Route::get('/queries/{type}','Admin\PageController@queries')->name('admin.queries');
    Route::delete('/queries/{type}/{id}','Admin\PageController@deleteQuery');
    Route::get('/queries/download/{type}','Admin\PageController@exportQueries');
    Route::resource('/blog', 'Admin\BlogController');
    Route::resource('/categories','Admin\CategoriesController');
    Route::resource('/subcategories','Admin\SubCategoriesController');
    Route::resource('/innercategories','Admin\InnerCategoriesController');
    Route::resource('/products','Admin\ProductController');
    Route::resource('/roles','Admin\RoleController');
    Route::get('/popup','Admin\PopupController@edit');
    Route::patch('/popup','Admin\PopupController@update');
    Route::get('/displaycontact','Admin\PageController@editDisplayContact');
    Route::patch('/displaycontact','Admin\PageController@updateDisplayContact');
    Route::resource('/banners','Admin\BannerController');
});

