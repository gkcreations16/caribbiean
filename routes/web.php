<?php

use Illuminate\Support\Facades\Auth;
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

/// front pages
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('category', 'HomeController@categorypage')->name('category');
Route::get('navbar2', 'HomeController@navbarfront')->name('navbar2');
Route::get('listing', 'HomeController@listingpage')->name('listing');
Route::post('/product/search', 'HomeController@searchProduct');
/// end front pages



//admin///////////////////////////////////////////////////////
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('profile', 'DashboardController@displyprofile')->name('profile');
    //Route::get('privacysetting', 'DashboardController@displypassword')->name('privacysetting');

    Route::put('profile', 'DashboardController@updateprofile')->name('profile.update');
    Route::put('profile/password', 'DashboardController@changePassword')->name('profile.password');
    ///inner pages
    Route::resource('page', 'HomePageController')->except(['create', 'show', 'edit']);
    Route::resource('user', 'UserController')->except(['create', 'show', 'edit', 'store']);
    Route::resource('category', 'CategoryController')->except(['create', 'show', 'edit']);
    Route::resource('subcategory', 'SubCategoryController')->except(['create', 'show', 'edit']);
    Route::resource('addpost', 'PostController')->except(['create', 'show', 'edit']);
    Route::get('GetSubCatAgainstMainCat/{id}', 'PostController@GetSubCatAgainstMainCat');
    // Route::resource('listings', 'ListingController')->except(['create', 'show', 'edit']);
});

//user///////////////////////////////////////////////////////
Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
